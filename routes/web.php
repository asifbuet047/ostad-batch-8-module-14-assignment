<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApplicationController::class, 'showHomePage']);

Route::get('/about', [ApplicationController::class, 'showAboutPage']);

Route::get('/projects', [ApplicationController::class, 'showProjectPage']);

Route::get('/blog', [ApplicationController::class, 'showBlogPage']);

Route::get('/contact', [ApplicationController::class, 'showContactPage']);
