<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
route::get('/service', [HomeController::class, 'services']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact', [HomeController::class, 'contact']);


//  Auth
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('admin/dashboard',[DashboardController::class, 'index'])->middleware('auth');

// SLIDER
Route::resource('admin/slider', SliderController::class);
Route::resource('admin/service', ServiceController::class);
Route::resource('admin/about', AboutController::class);
Route::resource('admin/portfolio', PortfolioController::class);

// Route::get('/contacts', [ContactController::class, 'index'])->middleware('auth');
// Route::post('/contacts', [ContactController::class, 'update'])->middleware('auth');
