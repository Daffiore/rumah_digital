<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Controller;
Route::get('/dashboard/beranda', [DashboardController::class, 'beranda']);

// Halaman Login (Auth)
Route::get('/auth', function () {
    if (session()->has('user')) {
        return redirect('/');
    }
    return view('auth');
})->name('login');

// Proses Validasi Login Username Random
Route::post('/auth/login', function (Request $request) {
    $username = $request->input('email');
    $password = $request->input('password');
    if ($username === 'TojiGanteng@stis.ac.id' && $password === 'mabar123') {
        session(['user' => 'Super Admin', 'email' => $username]);
        return redirect('/');
    }

    return back()->with('error', 'Email atau Password salah!');
});

// Proses Log Out
Route::post('/logout', function () {
    session()->forget('user');
    return redirect('/auth');
});

// Halaman Utama / Landing Page (Dashboard yang diproteksi)
Route::get('/', function () {
    if (!session()->has('user')) {
        return redirect('/auth');
    }
    return view('welcome');
});