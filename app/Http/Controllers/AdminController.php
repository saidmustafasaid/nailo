<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Constructor to ensure middleware protection
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // Admin dashboard
    public function index()
    {
        // Load all plastic submissions, newest first
        $submissions = Submission::orderBy('created_at', 'desc')->get();

        // Load user feedback
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        // Pass data to the 'admin' Blade view
        return view('admin', compact('submissions', 'feedbacks'));
    }
}
