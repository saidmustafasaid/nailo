<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use Symfony\Component\HttpFoundation\Response;

class NailoController extends Controller
{
    /**
     * Display the main landing page.
     */
    public function index(): Response
    {
        return response()->view('home');
    }

    /**
     * Show the plastic submission form.
     */
    public function createSubmission(): Response
    {
        return response()->view('submissions.create');
    }

    /**
     * Store a new plastic submission (without photo).
     */
    public function storeSubmission(Request $request): Response
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'kilograms' => 'required|numeric|min:0.1',
        ]);

        Submission::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'location' => $request->location,
            'kilograms' => $request->kilograms,
        ]);

        return redirect()
            ->route('home')
            ->with('success', 'Thank you! Your plastic submission has been received. We will contact you shortly.');
    }
}
