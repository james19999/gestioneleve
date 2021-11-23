<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmSController;
use App\Http\Controllers\ClasseController;

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
Route::get('/sms',[SmSController::class,'sms']);
Route::get('/', function () {
    return view('welcome');
});

//liste des classes à retourner dans la base de donnée
Route::get('/classes',[ClasseController::class,'index'])->name('index');
//route en relation avec le formulaire d 'enrégistrement des classes
Route::get('classes/form',[ClasseController::class,'form'])->name('form');
//route en relation pour stocker les données a travèrs le formulaire
Route::post('classe/store',[ClasseController::class,'store'])->name('store');