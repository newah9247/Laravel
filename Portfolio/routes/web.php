<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::group(['prefix' => 'NT'], function() {
    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');

    Route::get('/resume', function () {
        return view('resume');
    })->name('resume');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

});









