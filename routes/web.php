<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('img', [ImageController::class, "index"])->name('image');
Route::post('img-upload', [ImageController::class, "store"])->name('image.store');
