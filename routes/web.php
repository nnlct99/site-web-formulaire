<?php


use App\Http\Controllers\DevisController;

Route::get('/devis', [DevisController::class, 'create'])->name('devis.create');
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');

Route::get('/', function () {
    return view('welcome');
});

//Route dashboard
Route::get('/devis-dashboard', [DevisController::class, 'index'])->name('devis.dashboard');
Route::get('/contact-dashboard', [ContactController::class, 'index'])->name('contact.dashboard');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [DevisController::class, 'store'])->name('contact.store');



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

// Page d’accueil
Route::get('/', function () {
    return view('welcome');
});


// ----------------- DEVIS -----------------
Route::get('/devis/create', [DevisController::class, 'create'])->name('devis.create');
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');

// Tableau de bord devis
Route::get('/devis-dashboard', [DevisController::class, 'index'])->name('devis.dashboard');

// ----------------- CONTACT -----------------
Route::get('/contact', [ContactController::class, 'create'])->name('contact.form');  
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');  

// Tableau de bord contact
Route::get('/contact-dashboard', [ContactController::class, 'index'])->name('contact.dashboard');

// ----------------- DASHBOARD GLOBAL -----------------
Route::get('/dashboard', [DevisController::class, 'index'])->name('dashboard');
