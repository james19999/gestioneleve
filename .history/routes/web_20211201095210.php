<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmSController;
use App\Http\Controllers\EleveController;
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
// Route::post('/sms',[SmSController::class,'sms'])->name('sms');
// Route::get('/send',[SmSController::class,'send']);
Route::get('/', function () {
    return view('welcome');
});

//liste des classes à retourner dans la base de donnée
Route::get('/classes',[ClasseController::class,'index'])->name('index');
//route en relation avec le formulaire d 'enrégistrement des classes
Route::get('classes/form',[ClasseController::class,'form'])->name('form');
//route en relation pour stocker les données a travèrs le formulaire
Route::post('classe/store',[ClasseController::class,'store'])->name('store');
Route::delete('/supprimer/{id}',[ClasseController::class,'deletes'])->name('supprimer');
Route::get('/edit/{id}',[ClasseController::class,'edit'])->name('edit');

Route::put('/updates/de/{id}',[ClasseController::class,'updates'])->name('updates');


Route::resource('eleves',EleveController::class);
Route::middleware(['auth', 'second'])->group(function () {

    Route::view('/admin', 'admin.admin')->name('admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');