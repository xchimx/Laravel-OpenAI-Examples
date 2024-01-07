<?php

use App\Http\Controllers\AiAudioController;
use App\Http\Controllers\AiImageController;
use App\Http\Controllers\AiTextController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/poem', [AiTextController::class, 'index']);
Route::post('/poem', [AiTextController::class, 'store']);

Route::get('/roast', [AiAudioController::class, 'index']);
Route::post('/roast', [AiAudioController::class, 'store']);

Route::get('/image', [AiImageController::class, 'index']);
Route::post('/image', [AiImageController::class, 'store']);
Route::get('/image/clear', [AiImageController::class, 'clear']);



