<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::group(['prefix', 'entry'], function () {
    Route::get('/', function () {
        
    });
});

Route::group(['prefix' => 'office'], function () {

});



Route::group(['prefix' => 'nonlivestock'], function () {
    Route::get('/', function () {
        return view('nonlivestock');
    })->name('nonlivestockEntry');

    Route::post('/submission', function () {
        return view('nonlivestockSubmission');
    })->name('nonlivestockSubmission');
});

Route::group(['prefix' => 'livestock'], function () {
    Route::get('/', function () {
        return view('livestock');
    })->name('livestockEntry');

    Route::post('/submission', function () {
        return view('livestockSubmission');
    })->name('livestockSubmission');
});

// Route::get('/', function () {
//     return view('index');
// })->name('entry');

// Route::post('/', function () {
//     return view('indexSubmission');
// })->name('submission');


Route::get('/beef', function () {
    return view('beef');
})->name('beef');