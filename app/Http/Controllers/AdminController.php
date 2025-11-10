<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

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

    public function showSubmission($id)
    {
        $submission = \App\Models\PlasticSubmission::findOrFail($id);

        return view('show', compact('submission'));

    }

}
