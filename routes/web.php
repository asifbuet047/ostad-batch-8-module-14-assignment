<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApplicationController::class, 'showHomePage']);

Route::get('/about', [ApplicationController::class, 'showAboutPage']);
