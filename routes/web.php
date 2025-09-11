<?php


use App\Http\Controllers\DevisController;

Route::get('/devis', [DevisController::class, 'create'])->name('devis.create');

Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');

Route::get('/', function () {
    return view('welcome');
});
