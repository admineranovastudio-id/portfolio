<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
