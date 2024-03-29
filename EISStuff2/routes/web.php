<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('entry');

Route::post('/', function () {
    return view('indexSubmission');
})->name('submission');


Route::get('/beef', function () {
    return view('beef');
})->name('beef');