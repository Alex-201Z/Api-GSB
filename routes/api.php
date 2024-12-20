<?php

use App\Http\Controllers\VisiteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//Route::POST('/visiteur/initpwds', [VisiteurController::class,"initPasswords"]);
Route::get('/visiteur/logout', [VisiteurController::class,"logout"])->middleware('auth:sanctum');
Route::post('/visiteur/login', [VisiteurController::class,"login"]);
Route::get('/visiteur/unauth', [VisiteurController::class,"unauthorized"])-> name("login");

Route::get('/frais/{idFrais}', [FraisController::class,"unauthorized"]);
Route::get('/frais/ajout', [FraisController::class,"unauthorized"]);
Route::get('/frais/modif', [FraisController::class,"unauthorized"]);
Route::get('/frais/suppr', [FraisController::class,"unauthorized"]);
Route::get('/frais/liste/{idVisiteur}', [FraisController::class,"unauthorized"]);
