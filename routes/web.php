<?php

use App\Http\Controllers\DevisController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// ----------------- DEVIS -----------------

// Afficher le formulaire de demande de devis
Route::get('/devis', [DevisController::class, 'create'])->name('devis.create');

// Traiter la soumission du formulaire de devis
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');

// Dashboard admin - liste des devis
Route::get('/devis-dashboard', [DevisController::class, 'index'])->name('devis.dashboard');

// Supprimer un devis
Route::delete('/devis/{id}', [DevisController::class, 'destroy'])->name('devis.destroy');

// Générer le PDF d'un devis
Route::get('/devis/{id}/pdf', [DevisController::class, 'generatePdf'])->name('devis.pdf');

// ----------------- CONTACT -----------------

// Afficher le formulaire de contact
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

// Traiter la soumission du formulaire de contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Dashboard admin - liste des messages de contact
Route::get('/contact-dashboard', [ContactController::class, 'index'])->name('contact.dashboard');

// Supprimer un message de contact
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

// ----------------- ROUTES ADMIN (optionnelles) -----------------

// Si vous voulez protéger les dashboards avec une authentification
/*
Route::middleware(['auth'])->group(function () {
    Route::get('/devis-dashboard', [DevisController::class, 'index'])->name('devis.dashboard');
    Route::get('/contact-dashboard', [ContactController::class, 'index'])->name('contact.dashboard');
    Route::delete('/devis/{id}', [DevisController::class, 'destroy'])->name('devis.destroy');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    Route::get('/devis/{id}/pdf', [DevisController::class, 'generatePdf'])->name('devis.pdf');
});
*/

// ----------------- AUTRES PAGES (à implémenter) -----------------

// Route::get('/a-propos', function () {
//     return view('pages.about');
// })->name('about');

// Route::get('/creations', function () {
//     return view('pages.creations');
// })->name('creations');

// Route::get('/services', function () {
//     return view('pages.services');
// })->name('services');