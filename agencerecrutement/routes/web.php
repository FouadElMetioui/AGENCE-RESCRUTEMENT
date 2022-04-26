<?php

use App\Http\Controllers\AffectationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ControllerAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Candidat
Route::get('/candidature/create', [CandidatController::class, 'create']);
Route::post('/candidature', [CandidatController::class, 'store']);
Route::get('/candidature/{id}', [CandidatController::class, 'index']);
Route::get('/candidature/edit/{id}', [CandidatController::class, 'edit']);
Route::put('/candidature/update/{id}', [CandidatController::class, 'update']);
Route::delete('/deletecandidature/{id}', [CandidatController::class, 'destroy']);

// Entreprise
Route::get('entreprise',[EntrepriseController::class,'index']);
Route::get('offre/create',[EntrepriseController::class,'create']);
Route::post('offre/create',[EntrepriseController::class,'create']);
Route::post('offre/store',[EntrepriseController::class,'store']);
Route::get('offre/{id}/edit',[EntrepriseController::class,'edit']);
Route::post('offre/{id}',[EntrepriseController::class,'update']);
Route::get('offre/{id}',[EntrepriseController::class,'destroy']);

// Recruteur
Route::get('Recruteur', [AffectationController::class, 'index']);
Route::get('Candidats/{id}', [AffectationController::class, 'Candidat']);
Route::post('Affecter/{id1}/{id2}',[AffectationController::class, 'affecter']);
Route::get('affectations', [AffectationController::class, 'affectations']);
Route::get('telecharger/{id}', [AffectationController::class, 'telecharger']);

// Admin
//--------------------------------Recruteur----------------------------------
Route::get('/AdminAcceuil', function () {
    return view('admin.acceuil');
});
Route::get('/ListRecruteurs', [ControllerAdmin::class, 'ListRecruteurs'])->name('ListRecruteurs');
Route::get('/ModifierRecruteur', [ControllerAdmin::class, 'ModifierRecruteur']);
Route::get('/SaveRecruteur', [ControllerAdmin::class, 'SaveRecruteur']);
Route::get('/AjouterRecruteur', [ControllerAdmin::class, 'AjouterRecruteur']);
Route::get('/SaveAjouterRecruteur', [ControllerAdmin::class, 'SaveAjouterRecruteur']);
Route::get('/DeleteRecruteur', [ControllerAdmin::class, 'DeleteRecruteur']);

//--------------------------offre------------------------------------------------------
Route::get('/Offre', [ControllerAdmin::class, 'Offre'])->name('ListOffre');
Route::get('/DeleteOffre', [ControllerAdmin::class, 'DeleteOffre']);

//--------------------------candidature-----------------------------------
Route::get('/Candidature', [ControllerAdmin::class, 'Candidature'])->name('ListCandidature');
Route::get('/DeleteCandidature', [ControllerAdmin::class, 'DeleteCandidature']);
Route::get('/admincandidature/{id}', [ControllerAdmin::class, 'getOne']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/password/reset', [App\Http\Controllers\Auth\PasswordController::class, 'reset']);
