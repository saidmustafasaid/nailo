<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    /**
     * Constructor to ensure middleware protection
     */
    public function __construct()
    {
        // Apply 'auth:admin' middleware to all methods in this controller
        $this->middleware('auth:admin');
    }

    /**
     * Admin dashboard showing submissions and feedback
     */
    public function index()
    {
        // Load all plastic submissions, newest first
        $submissions = Submission::orderBy('created_at', 'desc')->get();

        // Load all user feedback
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        // Pass data to the 'admin' Blade view
        return view('admin', compact('submissions', 'feedbacks'));
    }

    /**
     * Show a single submission
     */
    public function showSubmission($id)
    {
        $submission = Submission::findOrFail($id);

        // If you want to generate a full public URL for Supabase
        if (!empty($submission->photo_path)) {
            $submission->photo_url = env('SUPABASE_URL') . '/storage/v1/object/public/' . $submission->photo_path;
        } else {
            $submission->photo_url = null;
        }

        return view('show', compact('submission'));
    }

    /**
     * Store submission with image upload to Supabase Storage
     */
    public function storeSubmission(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:10240', // max 10MB
            'name' => 'required|string',
            'phone' => 'required|string',
            'location' => 'required|string',
            'kgs' => 'required|numeric',
        ]);

        $uploadedFile = $request->file('photo');
        $filename = uniqid() . '_' . $uploadedFile->getClientOriginalName();

        // Upload to Supabase Storage
        $response = Http::withHeaders([
            'apikey' => env('SUPABASE_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
            'Content-Type' => 'application/octet-stream',
        ])->put(
            env('SUPABASE_URL') . '/storage/v1/object/' . env('SUPABASE_BUCKET') . '/' . $filename,
            file_get_contents($uploadedFile->getRealPath())
        );

        if ($response->failed()) {
            return back()->withErrors('Failed to upload image.');
        }

        // Save submission in DB
        $submission = new Submission();
        $submission->name = $request->name;
        $submission->phone = $request->phone;
        $submission->location = $request->location;
        $submission->kgs = $request->kgs;
        $submission->photo_path = $filename;
        $submission->save();

        return redirect()->route('admin.submissions.show', $submission->id);
    }
}
