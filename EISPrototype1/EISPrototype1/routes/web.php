<?php

use Illuminate\Support\Facades\Route;

//Invoice Controllers
use App\Http\Controllers\IndexInvoice;
use App\Http\Controllers\MakeInvoice;
use App\Http\Controllers\MakePayment;
use App\Http\Controllers\ConfirmInvoice;
use App\Http\Controllers\BackPage;
use App\Http\Controllers\MakeItem;
use App\Http\Controllers\ItemTable;

//Livestock Controllers
use App\Http\Controllers\HorsePullsController;
use App\Http\Controllers\OxenPullsController;
use App\Http\Controllers\LightHorseController;
use App\Http\Controllers\HaflingerController;
use App\Http\Controllers\MiniController;
use App\Http\Controllers\BeefController;
use App\Http\Controllers\DairyController;


Route::get('/', function () {
    return view('Main/index');
})->name('main');

Route::get('/EntrySelect', function () {
    return view('other/entry');
})->name('entrySelect');

Route::get('/LivestockSelect', function ()  {
    return view('livestock/livestockSelect');
})->name('livestockSelect');

Route::group(['prefix' => 'nonlivestock'], function () {
    Route::get('/', function () {
        return view('nonlivestock/nonlivestock');
    })->name('nonlivestock');

    Route::post('/submission', function () {
        return view('nonlivestock/nonlivestockSubmission');
    })->name('submission');
});

Route::group(['prefix' => 'Invoice'], function() {
    Route::get('/', [IndexInvoice::class, 'index'])->name('Invoice');
    Route::get('/MakeInvoice', [MakeInvoice::class, 'index'])->name('MakeInvoice');
    Route::get('/MakePayment', [MakePayment::class, 'index'])->name('MakePayment');
    Route::get('/Confirm', [ConfirmInvoice::class, 'index'])->name('Confirm');
    Route::get('/Makeitem', [MakeItem::class, 'index'])->name('MakeItem');
    Route::get('/Itemtable', [ItemTable::class, 'index'])->name('ItemTable');
    Route::get('../', [BackPage::class, 'index'])->name('Back');
});

//Livestock Routes
Route::group(['prefix' => 'Livestock'], function () {
    Route::get('/Livestock/HorsePulls', [HorsePullsController::class, 'ViewHorsePulls'])->name('horsepulls');
    Route::get('/Livestock/OxenPulls', [OxenPullsController::class, 'ViewOxenPulls'])->name('oxenpulls');
    Route::get('/Livestock/LightHorse', [LightHorseController::class, 'ViewLightHorse'])->name('lighthorse');
    Route::get('/Livestock/Haflinger', [HaflingerController::class, 'ViewHaflinger'])->name('haflinger');
    Route::get('/Livestock/Mini', [MiniController::class, 'ViewMini'])->name('mini');
    Route::get('/Livestock/Beef', [BeefController::class, 'ViewBeef'])->name('beef');
    Route::get('/Livestock/Dairy', [DairyController::class, 'ViewDairyPulls'])->name('dairy');
});

//Sponsorship/Parade/Contact routes
Route::group(['prefix' => 'Other'], function () {
    Route::get('/Sponsorship', function () {
        return view('other/sponsorship');
    })->name('sponsorship');
    
    Route::get('/Parade', function () {
        return view('other/parade');
    })->name('parade');

    Route::get('/Vendor', function () {
        return view('other/vendor');
    })->name('vendor');

    Route::get('/Contact', function () {
        return view('other/contactPage');
    })->name('contact');
});

Route::group(['prefix' => 'Office'], function () {
    Route::get('/', function () {
        return view('office/officelogin');
    })->name('officelogin');

    Route::get('/MainMenu', function () {
        return view('/office/OfficeMainMenu');
    })->name('officemain');

    Route::get('/SearchLivestock', function () {
        return view('/office/OfficeSearchLivestock');
    })->name('searchlivestock');

    Route::get('/SearchNonLivestock', function () {
        return view('/office/OfficeSearchNonLivestock');
    })->name('searchnonlivestock');

    Route::get('/SearchEntrants', function () {
        return view('/office/OfficeSearchEntrants');
    })->name('searchentrants');    
});