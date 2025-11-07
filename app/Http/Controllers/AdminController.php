<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function index()
    {
        // Load all plastic submissions
        $submissions = Submission::orderBy('created_at', 'desc')->get();

        // Load user feedback
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        return view('admin', compact('submissions', 'feedbacks'));
    }
}
