<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ParentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//ROUTES FOR STUDENTS
Route::get('/eleves', [EleveController::class, 'index'])->name('eleves.index'); // Afficher tous les élèves
Route::get('/eleves/create', [EleveController::class, 'create'])->name('eleves.create'); // Afficher le formulaire de création d'un élève
Route::post('/eleves', [EleveController::class, 'store'])->name('eleves.store'); // Enregistrer un nouvel élève
Route::get('/eleves/{id}', [EleveController::class, 'show'])->name('eleves.show'); // Afficher les détails d'un élève spécifique
Route::get('/eleves/{id}/edit', [EleveController::class, 'edit'])->name('eleves.edit'); // Afficher le formulaire de modification d'un élève
Route::put('/eleves/{id}', [EleveController::class, 'update'])->name('eleves.update'); // Modifier les informations d'un élève
Route::delete('/eleves/{id}', [EleveController::class, 'destroy'])->name('eleves.destroy'); // Supprimer un élève
//ROUTES FOR PARENTS
Route::get('/parents', [ParentController::class, 'index'])->name('parents.index');// Afficher la liste des parents
Route::get('/parents/create', [ParentController::class, 'create'])->name('parents.create');// Afficher le formulaire de création d'un parent
Route::post('/parents', [ParentController::class, 'store'])->name('parents.store');// Enregistrer un nouveau parent
Route::get('/parents/{parent}', [ParentController::class, 'show'])->name('parents.show');// Afficher les détails d'un parent
Route::get('/parents/{parent}/edit', [ParentController::class, 'edit'])->name('parents.edit');// Afficher le formulaire d'édition d'un parent
Route::put('/parents/{parent}', [ParentController::class, 'update'])->name('parents.update');// Mettre à jour un parent existant
Route::delete('/parents/{parent}', [ParentController::class, 'destroy'])->name('parents.destroy');// Supprimer un parent

