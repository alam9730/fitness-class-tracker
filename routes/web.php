<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FitnessClassController;

Route::resource('classes', FitnessClassController::class);

Route::get('/', [FitnessClassController::class, 'index']);
