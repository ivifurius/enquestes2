<?php

use App\Http\Controllers\EnquestumController;
use App\Http\Controllers\OpciopreguntumController;
use App\Http\Controllers\PreguntumController;
use App\Http\Controllers\TipuspreguntumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('enquesta', EnquestumController::class)->middleware('auth');
Route::resource('pregunta', PreguntumController::class)->middleware('auth');
Route::resource('tipuspregunta', TipuspreguntumController::class)->middleware('auth');
Route::resource('opciopregunta', OpciopreguntumController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('form2', [App\Http\Controllers\EnquestumController::class, 'form2'])->name('enquestum.form2');