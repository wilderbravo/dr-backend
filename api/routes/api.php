<?php

use App\Models\Article;
use App\Models\Persona;
use Illuminate\Support\Facades\Route;

Route::get('articles', function() {    
    return Article::all();
});

Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::get('personas', function() {    
    return Persona::all();
});

Route::get('personas/{id}', function($id) {
    return Persona::find($id);
});