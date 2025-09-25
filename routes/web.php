<?php


use App\Http\Controllers\DevisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home')->name('welcome');


// ----------------- DEVIS -----------------

Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');

Route::get('/devis', [DevisController::class, 'create'])->name('devis.create');


Route::delete('/devis/{id}', [DevisController::class, 'destroy'])->name('devis.destroy');

Route::get('/devis/{id}/pdf', [DevisController::class, 'generatePdf'])->name('devis.pdf');


Route::get('/devis-dashboard', [DevisController::class, 'index'])->name('devis.dashboard');


Route::get('/contact-dashboard', [ContactController::class, 'index'])->name('contact.dashboard');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');



Route::get('/contact', [ContactController::class, 'create'])->name('contact.form');  

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');



Route::get('/devis-received', [Devis::class, 'create'])->name('contact.form');  
