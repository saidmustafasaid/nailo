<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\PlasticSubmission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// Homepage route
Route::get('/', function () {
    return view('home');
});

// Handle form submission
Route::post('/sell-plastics', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string',
        'location' => 'required|string',
        'kilograms' => 'required|numeric',
        'photo' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        $data['photo'] = $request->file('photo')->store('plastics', 'public');
    }

    PlasticSubmission::create($data);

    return back()->with('success', 'Thank you! Nailo team will contact you soon.');
})->name('sell-plastics');

Route::get('/admin', function () {
    $submissions = \App\Models\PlasticSubmission::latest()->get();
    return view('admin', compact('submissions'));
});


// Login form
Route::get('/login', function () {
    return view('login');
})->name('login');

// Handle login
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        session(['admin' => $user->id]);
        return redirect('/admin');
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
});

// Logout
Route::post('/logout', function () {
    session()->forget('admin');
    return redirect('/login');
});

Route::get('/admin', function () {
    if (!session()->has('admin')) {
        return redirect('/login');
    }

    $submissions = \App\Models\PlasticSubmission::latest()->get();

    // Calculate dashboard stats
    $totalSellers = $submissions->count();
    $totalKilograms = $submissions->sum('kilograms');
    $totalPhotos = $submissions->whereNotNull('photo')->count();

    return view('admin', compact('submissions', 'totalSellers', 'totalKilograms', 'totalPhotos'));
});

