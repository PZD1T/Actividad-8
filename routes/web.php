<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\TeamsController; 

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

Route::resource('/Conferences',ConferencesController::class);
Route::resource('/Divisions', DivisionsController::class);
Route::resource('/Cities', CitiesController::class);
Route::resource('/Teams', TeamsController::class); 

Route::view('/', 'conferences.index');