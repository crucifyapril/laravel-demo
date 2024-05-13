<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::post('/submit-news', [MainController::class, 'submitNews']);

Route::get('/reg', [UserController::class, 'reg']);
Route::post('/reg', [UserController::class, 'regSuccess']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginSuccess']);
Route::get('/logout', [UserController::class, 'logout']);