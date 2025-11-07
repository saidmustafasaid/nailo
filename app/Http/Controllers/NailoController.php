<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class NailoController extends Controller
{
    /**
     * Display the main landing page.
     */
    public function index(): Response
    {
        return response()->view('home'); // ✅ FIXED!
    }

    /**
     * Store a new plastic submission.
     */
    public function storeSubmission(Request $request): Response
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'kilograms' => 'required|numeric|min:0.1',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('submissions', 'public');
        }

        Submission::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'location' => $request->location,
            'kilograms' => $request->kilograms,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('home')->with('success', 'Thank you! Your plastic submission has been received. We will contact you shortly.');
    }
}
