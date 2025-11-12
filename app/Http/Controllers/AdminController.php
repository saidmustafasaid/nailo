<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Admin dashboard showing submissions and feedback.
     */
    public function index()
    {
        $submissions = Submission::orderBy('created_at', 'asc')->get();
        $feedbacks = Feedback::orderBy('created_at', 'asc')->get();

        return view('admin', compact('submissions', 'feedbacks'));
    }

    /**
     * Show a single submission.
     */
    public function showSubmission($id)
    {
        $submission = Submission::findOrFail($id);
        return view('show', compact('submission'));
    }

     public function deleteSubmission($id)
    {
        Submission::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Submission deleted successfully.');
    }

    public function deleteFeedback($id)
    {
        Feedback::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Feedback deleted successfully.');
    }
}
