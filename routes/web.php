<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\MedecinController;
use Illuminate\Support\Facades\Route;
use App\Models\Medicament;
use App\Models\SpecialiteMedical;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', [MedicamentController::class, 'dashboard'])->name('dashboard');

Route::view('/doc-dashboard', function () {
    return view("docDashboard", [
        'medicaments ' => $medicaments,
        'specialities' => $specialities
    ]);
})->name('doc-dashboard');

Route::view('/welcome', 'welcome')->name('welcome');
require __DIR__.'/auth.php';

Route::middleware(["auth", "role"])->prefix('medical')->group(function () {
    Route::view('/profile', 'profile.edit')->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/medicaments', [MedicamentController::class, 'index'])->name('medicaments.index');
    Route::post('/medicaments', [MedicamentController::class, 'store'])->name('medicaments.store');
    Route::get('/dashboard-medicament', [MedicamentController::class, 'dashboard'])->name('dashboard.medicament');
    Route::put('/medicaments/{medicament}', [MedicamentController::class, 'update'])->name('medicaments.update');
    Route::delete('/medicaments/{id}', [MedicamentController::class, 'destroy'])->name('medicaments.destroy');

    Route::get('/specialities', [SpecialityController::class, 'index'])->name('specialities.index');
    Route::post('/specialities-store', [SpecialityController::class, 'store'])->name('specialities.store');
    Route::get('/dashboard-speciality', [SpecialityController::class, 'dashboard'])->name('dashboard.speciality');
    Route::put('/specialities/{name}', [SpecialityController::class, 'update'])->name('specialities-update');
    Route::delete('/specialities/{id}', [SpecialityController::class, 'destroy'])->name('specialities-destroy');

    Route::get('/medecins', [MedecinController::class, 'index'])->name('medecins.index');
});

Route::view('/booking', 'booking');
