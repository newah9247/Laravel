<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('/', function () {
    return view('submission');
})->name('submission');