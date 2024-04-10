<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::group(['prefix' => 'NT'], function() {
    Route::get('/github', function () {
        return view('github');
    })->name('github');

    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');

    Route::get('/resume', function () {
        return view('resume');
    })->name('resume');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

});









