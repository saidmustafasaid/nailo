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

// --- PUBLIC ROUTES ---

// Homepage
Route::get('/', [NailoController::class, 'index'])->name('home');

// Submission forms
Route::post('/sell-plastics', [NailoController::class, 'storeSubmission'])->name('sell-plastics');
Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('submit.feedback');

// --- AUTH ROUTES (Login & Logout) ---

// Show login form
Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');

// Handle login
Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');

// Logout route (works for admin & redirects home)
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/'); // Redirect to home page after logout
})->name('logout');

// --- ADMIN ROUTES (Protected by middleware) ---
Route::middleware(['auth', 'admin.auth'])->group(function () {

    // Admin dashboard
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // Admin submissions
    Route::get('/admin/submissions', [AdminController::class, 'index'])->name('admin.submissions');

});
