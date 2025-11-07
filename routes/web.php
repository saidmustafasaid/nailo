<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User; // Still needed for the inline login logic
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // <-- Added Auth Facade
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\NailoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file registers the web routes for your application.
| All routes are loaded by the RouteServiceProvider.
|
*/

// --- PUBLIC ROUTES (No Authentication Required) ---

// Homepage/Landing Page
Route::get('/', [NailoController::class, 'index'])->name('home');

// Submission Forms
Route::post('/sell-plastics', [NailoController::class, 'storeSubmission'])->name('sell-plastics');
Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('submit.feedback');


// --- AUTHENTICATION ROUTES (Not Protected) ---

// Login form
Route::get('/login', function () {
    // Assuming you have a 'login.blade.php' view
    return view('login');
})->name('login');

// Handle login (CRUCIAL FIX: Uses standard Laravel Auth)
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        // Regeneration prevents session fixation attacks
        $request->session()->regenerate();

        // Check if the authenticated user is an admin before redirecting
        if (Auth::user()->is_admin) {
             return redirect()->intended(route('admin.dashboard'));
        }
        
        // If logged in but not an admin, log them out and redirect
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()->withErrors(['email' => 'Access denied: You are not authorized as an administrator.']);

    }

    // Failed login attempt
    return back()->withErrors(['email' => 'Invalid credentials']);

})->name('login.post');


// --- ADMIN ROUTES (Protected by 'admin.auth' Middleware) ---

Route::middleware(['admin.auth'])->group(function () {

    // Admin Dashboard - Uses the new AdminController@index
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // Logout
    Route::post('/logout', function (Request $request) {
        Auth::logout(); // Use Laravel's standard logout method
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Redirect to the named login route
        return redirect()->route('login');
    })->name('logout');
});

Route::get('/admin/submissions', [AdminController::class, 'index'])
    ->name('admin.submissions');

Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminLoginController::class, 'login']);
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

// Protect admin page with middleware
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/submissions', [AdminController::class, 'index'])->name('admin.submissions');
});