<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('contents.home');
})->name('home');

Route::get('/about', function () {
    return view('contents.about');
})->name('about');

Route::get('/service', function () {
    return view('contents.service');
})->name('service');

Route::prefix('service')->name('service.')->group(function () {

    Route::get('/air-freight', function () {
        return view('contents.details.services.air_freight');
    })->name('air-freight');

    Route::get('/sea-freight', function () {
        return view('contents.details.services.sea_freight');
    })->name('sea-freight');

    Route::get('/warehouse-and-distribution', function () {
        return view('contents.details.services.warehouse_distribution');
    })->name('warehouse-and-distribution');

    // Route::get('/land-transport', function () {
    //     return view('contents.details.services.land_transport');
    // })->name('land-transport');

    // Route::get('/contract-logistics', function () {
    //     return view('contents.details.services.contract_logistics');
    // })->name('contract-logistics');

});

Route::get('/facility', function () {
    return view('contents.facility');
})->name('facility');

Route::get('/contact', function () {
    return view('contents.contact');
})->name('contact');

Route::post('/send_email', [ContactController::class, 'sendEmail'])
    ->name('contact.send');