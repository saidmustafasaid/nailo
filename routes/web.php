<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NailoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Auth\AdminLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ----------------------------
// PUBLIC ROUTES
// ----------------------------

// Homepage
Route::get('/', [NailoController::class, 'index'])->name('home');

// Plastic submission form
Route::get('/sell-plastics', [NailoController::class, 'createSubmission'])->name('submissions.create');

// Handle submission POST
Route::post('/sell-plastics', [NailoController::class, 'storeSubmission'])->name('sell-plastics');

// Feedback
Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('submit.feedback');

// ----------------------------
// ADMIN AUTH ROUTES
// ----------------------------

// Login page
Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');

// Process login
Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');

// Logout (redirect to homepage)
Route::post('/logout', function (Request $request) {
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// ----------------------------
// PROTECTED ADMIN ROUTES
// ----------------------------

Route::middleware(['auth:admin'])->group(function () {

    // Admin dashboard
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // Submissions list page
    Route::get('/admin/submissions', [AdminController::class, 'index'])->name('admin.submissions');

    // View a single submission
    Route::get('/admin/submissions/{id}', [AdminController::class, 'showSubmission'])
        ->name('admin.submissions.show');

});

Route::delete('/admin/submissions/{id}', [AdminController::class, 'deleteSubmission'])->name('admin.submissions.delete');
Route::delete('/admin/feedbacks/{id}', [AdminController::class, 'deleteFeedback'])->name('admin.feedback.delete');

