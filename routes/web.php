<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Auth\Events\Login;

Route::get('/', [HomeController::class, 'index']);

Route::get('/profile', function(){
    return auth()->user()->name;
})->middleware('verified');

Route::middleware('guest')->group(function () {
    Route::get('/register', [LoginController::class, 'register']);

    Route::post('/register', [LoginController::class, 'create']);

    Route::get('/login', [LoginController::class, 'login'])->name('login');

    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/forgot-password', [LoginController::class, 'forgotPassword']);

    Route::post('/forgot-password', [LoginController::class, 'resetPassword']);

    Route::get('/reset-password/{token}', [LoginController::class, 'sendResetPassword']);

    Route::post('/reset-password', [LoginController::class, 'resetingPassword']);
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify', [LoginController::class, 'verifyEmail'])->name('verification.notice');

    Route::get('email/verify/{id}/{hash}', [LoginController::class, 'verifyingEmail'])->middleware(['auth', 'signed'])->name('verification.verify');
    
    Route::post('email/verification-notification', [LoginController::class, 'sendVerificationEmail'])->middleware(['auth', 'throttle:6,1'])->name('verification.send'); 
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/about', [AboutController::class, 'about'])->name('about');

    Route::get('/about/{id}/editAbout', [AboutController::class, 'editAbout']);

    Route::patch('/about/{id}/updateAbout', [AboutController::class, 'updateAbout']);

    Route::get('/about/{id}/deleteAbout', [AboutController::class, 'deleteAbout']);

    Route::get('/about/createAbout', [AboutController::class, 'createAbout']);

    Route::post('/about/storeAbout', [AboutController::class, 'storeAbout']);

    Route::get('/projects', [ProjectsController::class, 'projects'])->name('projects');

    Route::get('/project/{id}/editProject', [ProjectsController::class, 'editProject']);

    Route::patch('/projects/{id}/updateProject', [ProjectsController::class, 'updateProject']);

    Route::get('/projects/{id}/deleteProject', [ProjectsController::class, 'deleteProject']);

    Route::get('/projects/createProject', [ProjectsController::class, 'createProject']);
    
    Route::post('/projects/storeProject', [ProjectsController::class, 'storeProject']);

    Route::get('/logout', [LoginController::class, 'logout']);
});