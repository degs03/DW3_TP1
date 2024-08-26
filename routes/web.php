<?php

use App\Http\Controllers\AutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CrearAuto',[AutoController::class,'CrearAuto']);
Route::get('/ver_autos',[AutoController::class,'ver_autos']);
Route::get('/show_auto/{id}',[AutoController::class,'show_auto']);
Route::get('/delete_auto/{id}',[AutoController::class,'delete_auto']);
Route::get('/update_auto',[AutoController::class,'update_auto']);
