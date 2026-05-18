<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = \App\Models\Project::all() ?? collect();
    return view('welcome', compact('projects'));
})->name('home')->name('login'); 

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/admin');
    }

    return redirect()->to('/')->with('login_error', 'Email atau password yang Anda masukkan salah.')->withInput();
});

Route::post('/contact', function (Request $request) {
    return back()->with('success', true);
})->name('contact');