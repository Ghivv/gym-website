<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGymController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user_gyms', UserGymController::class);
Route::resource('articles', ArticleController::class);
Route::resource('workouts', WorkoutController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('comments', CommentController::class);
