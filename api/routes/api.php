<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PersonaController;

Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{article}', [ArticleController::class, 'show']);

Route::get('personas', [PersonaController::class, 'index']);
Route::get('personas/{persona}', [PersonaController::class, 'show']);

