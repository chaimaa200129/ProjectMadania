<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SavoirController;
use App\Http\Controllers\AffectationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/matieres', 'MatiereController@index');

Route::get('/matieres/{id}/domaines', 'DomaineController@index');

//eleve 
//restaurer tous les eleves
Route::get('/eleves', function () {
    $eleves = App\Models\Eleve::all();
    return response()->json($eleves);
});

//restaurer un eleve par id 
Route::get('/eleves/{id}', 'App\Http\Controllers\EleveController@show');
//supprimer un eleve par id 
Route::delete('/eleves/{id}', 'App\Http\Controllers\EleveController@destroy');
//ajouter des eleves 
Route::post('/eleves', [EleveController::class, 'store']);

//parents

Route::get('/parents', function () {
    $parents = App\Models\ParentM::all();
    return response()->json($parents);
});
Route::get('/parents/{id}', 'App\Http\Controllers\ParentController@show');
Route::delete('/parents/{id}', 'App\Http\Controllers\ParentController@destroy');
Route::post('/parents', [ParentController::class, 'store']);

//departement 
Route::get('/departements', function () {
    $departements = App\Models\Departement::all();
    return response()->json($departements);
});  

Route::get('/departements/{id}', 'App\Http\Controllers\DepartementController@show');
    Route::post('/departements', [DepartementController::class, 'store']);
    Route::put('/departements/{id}', [DepartementController::class, 'update']);
    Route::delete('/departements/{id}', [DepartementController::class, 'destroy']);


//enseignant
 

Route::get('/enseignants', [EnseignantController::class, 'index']);
Route::get('/enseignants/{id}', [EnseignantController::class, 'show']);
Route::post('/enseignants', [EnseignantController::class, 'store']);
Route::put('/enseignants/{id}', [EnseignantController::class, 'update']);
Route::delete('/enseignants/{id}', [EnseignantController::class, 'destroy']);

//matiere 


Route::get('/matieres', [MatiereController::class, 'index']);
Route::get('/matieres/{id}', [MatiereController::class, 'show']);
Route::post('/matieres', [MatiereController::class, 'store']);
Route::put('/matieres/{id}', [MatiereController::class, 'update']);
Route::delete('/matieres/{id}', [MatiereController::class, 'destroy']);
//cycle


Route::get('/cycles', [CycleController::class, 'index']);
Route::get('/cycles/{id}', [CycleController::class, 'show']);
Route::post('/cycles', [CycleController::class, 'store']);
Route::put('/cycles/{id}', [CycleController::class, 'update']);
Route::delete('/cycles/{id}', [CycleController::class, 'destroy']);

//classe


    Route::get('/classes', [ClasseController::class, 'index']);
    Route::get('/classes/{id}', [ClasseController::class, 'show']);
    Route::post('/classes', [ClasseController::class, 'store']);
    Route::put('/classes/{id}', [ClasseController::class, 'update']);
    Route::delete('/classes/{id}', [ClasseController::class, 'destroy']);


//niveau

    Route::get('/niveaux', [NiveauController::class, 'index']);
    Route::get('/niveaux/{id}', [NiveauController::class, 'show']);
    Route::post('/niveaux', [NiveauController::class, 'store']);
    Route::put('/niveaux/{id}', [NiveauController::class, 'update']);
    Route::delete('/niveaux/{id}', [NiveauController::class, 'destroy']);


//periode 


Route::get('/periodes', [PeriodeController::class, 'index']);
Route::get('/periodes/{id}', [PeriodeController::class, 'show']);
Route::post('/periodes', [PeriodeController::class, 'store']);
Route::put('/periodes/{id}', [PeriodeController::class, 'update']);
Route::delete('/periodes/{id}', [PeriodeController::class, 'destroy']);

//Domaine 

Route::get('/domaines', [DomaineController::class, 'index']);
Route::post('/domaines', [DomaineController::class, 'store']);
Route::get('/domaines/{id}', [DomaineController::class, 'show',]);
Route::put('/domaines/{id}', [DomaineController::class, 'update']);
Route::delete('/domaines/{id}', [DomaineController::class, 'destroy']);
Route::get('/matieres/{id}/domaines/{periode}', [MatiereController::class, 'getDomainesByMatiereId']);


//Competences

Route::get('/competences', [CompetenceController::class, 'index']);
Route::post('/competences', [CompetenceController::class, 'store']);
Route::get('/competences/{id}', [CompetenceController::class, 'show']);
Route::put('/competences/{id}', [CompetenceController::class, 'update']);
Route::delete('/competences/{id}', [CompetenceController::class, 'destroy']);

//Savoir 


Route::get('/savoirs', [SavoirController::class, 'index']);
Route::post('/savoirs', [SavoirController::class, 'store']);
Route::get('/savoirs/{id}', [SavoirController::class, 'show']);
Route::put('/savoirs/{id}', [SavoirController::class, 'update']);
Route::delete('/savoirs/{id}', [SavoirController::class, 'destroy']);

//EVALUATIONS
Route::get('/evaluations', [EvaluationController::class, 'index']);
Route::post('/evaluations', [EvaluationController::class, 'store']);
Route::get('/evaluations/{id}', [EvaluationController::class, 'show']);
Route::put('/evaluations/{id}', [EvaluationController::class, 'update']);
Route::delete('/evaluations/{id}', [EvaluationController::class, 'destroy']);

//AFFECTATION 

Route::get('/affectations', [AffectationController::class, 'index']);
Route::post('/affectations', [AffectationController::class, 'store']);
Route::get('/affectations/{id}', [AffectationController::class, 'show']);
Route::put('/affectations/{id}', [AffectationController::class, 'update']);
Route::delete('/affectations/{id}', [AffectationController::class, 'destroy']);
