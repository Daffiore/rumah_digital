<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
Route::get('/dashboard/beranda', [DashboardController::class, 'beranda']);
Route::get('/auth',[LoginController::class, 'auth'])->name('login');
Route::post('/logincik',[LoginController::class, 'logincik']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/',[LoginController::class, 'home']);
Route::get('/signup',[LoginController::class, 'signup']);
Route::post('/register',[LoginController::class, 'register']);