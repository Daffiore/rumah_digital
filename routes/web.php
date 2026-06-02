<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PSDM_AkademikController;
use App\Http\Controllers\TimelineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/dashboard/beranda', [DashboardController::class, 'beranda']);
Route::get('/auth',[LoginController::class, 'auth'])->name('login');
Route::post('/logincik',[LoginController::class, 'logincik']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/',[LoginController::class, 'home']);
Route::get('/signup',[LoginController::class, 'signup']);
Route::post('/register',[LoginController::class, 'register']);

Route::middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/timeline', [TimelineController::class, 'showtimeline']);
Route::get('timeline/addtimeline', [TimelineController::class, 'addtimelineview']);
Route::post('timeline/savetimelines', [TimelineController::class, 'savetimeline']);
Route::get('timeline/edittimeline/{id}',[TimelineController::class, 'edittimelineview']);
Route::put('timeline/updatetimeline/{id}', [TimelineController::class, 'updatetimeline']);
Route::delete('timeline/deletetimeline/{id}', [TimelineController::class, 'deletetimeline']);

Route::get('/announcement', [AnnouncementController::class, 'showannouncement']);
Route::get('/announcement/addannouncement', [AnnouncementController::class, 'addannouncement']);
Route::post('/announcement/saveannouncement', [AnnouncementController::class, 'saveannouncement']);
Route::get('/announcement/editannouncement/{id}', [AnnouncementController::class, 'showeditannouncement']);
Route::put('/announcement/updateannouncement/{id}', [AnnouncementController::class, 'updateannouncement']);
Route::delete('/announcement/deleteannouncement/{id}', [AnnouncementController::class, 'deleteannouncement']);
});