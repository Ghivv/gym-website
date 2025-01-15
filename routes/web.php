<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGymController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

// Route::get('/posts', function () {
//     return view('posts', ['title' => 'Article']);
// });

Route::get('/latihan', function () {
    return view('latihan' , ['title' => 'Latihan']);
});

Route::get('/about', function () {
    return view('about' , ['title' => 'About']);
});
// Route::get('/index', function () {
//     return view('articles.index');
// });


// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::resource('user_gyms', UserGymController::class);
Route::resource('articles', ArticleController::class);
// Route::resource('workouts', WorkoutController::class);
// Route::resource('schedules', ScheduleController::class);
// Route::resource('comments', CommentController::class);
