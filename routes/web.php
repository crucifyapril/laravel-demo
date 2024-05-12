<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/reg', [MainController::class, 'reg']);
Route::post('/reg', [MainController::class, 'regSuccess']);
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/logout', [MainController::class, 'logout']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::post('/submit-news', [MainController::class, 'submitNews']);