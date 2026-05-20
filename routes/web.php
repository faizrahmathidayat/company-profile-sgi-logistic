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

    Route::get('/cargo-insurance', function () {
        return view('contents.details.services.cargo_insurance');
    })->name('cargo-insurance');

    Route::get('/custom-brokerage', function () {
        return view('contents.details.services.custom_brokerage');
    })->name('custom-brokerage');

    Route::get('/domestics-freight', function () {
        return view('contents.details.services.domestics_freight');
    })->name('domestics-freight');

    Route::get('/trucking', function () {
        return view('contents.details.services.trucking');
    })->name('trucking');

});

Route::get('/facility', function () {
    return view('contents.facility');
})->name('facility');

Route::get('/contact', function () {
    return view('contents.contact');
})->name('contact');

Route::post('/send_email', [ContactController::class, 'sendEmail'])
    ->name('contact.send');