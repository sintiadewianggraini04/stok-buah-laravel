<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuahController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('buah',BuahController::class);