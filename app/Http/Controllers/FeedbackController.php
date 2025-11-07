<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FeedbackController extends Controller
{
    /**
     * Handles the submission of the user feedback form.
     */
    public function submit(Request $request): Response
    {
        // 2. Data Validation
        $request->validate([
            'name' => 'nullable|string|max:255',
            // The front-end form input is 'comment', but we map it to the 'message' database column.
            'comment' => 'required|string|max:5000', 
        ]);

        // 3. Create and Save the Feedback record
        Feedback::create([
            'name' => $request->name,
            // Mapping the 'comment' input to the 'message' database column.
            'message' => $request->comment, 
        ]);

        // 4. Redirect back with a success message
        return redirect()->back()->with('feedback_success', 'Thank you for your valuable feedback! We appreciate you helping us improve.');
    }
}