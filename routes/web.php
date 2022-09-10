<?php

use App\Http\Controllers\OglasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Oglas;
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

//Svi oglasi
Route::get('/', [OglasController::class,'index']);
//Create screen
Route::get('/oglasi/create', [OglasController::class,'create'])->middleware('auth');
//Sprema oglas u bazu
Route::post('/oglasi/store', [OglasController::class,'store'])->middleware('auth');
//Edit screen
Route::get('/oglasi/{oglas}/edit', [OglasController::class,'edit'])->middleware('auth');
//Updatea objekt u bazi
Route::put('/oglasi/{oglas}', [OglasController::class, 'update'])->middleware('auth');
//Briše objekt iz baze
Route::delete('/oglasi/{oglas}',[OglasController::class, 'destroy'])->middleware('auth');
//Management view
Route::get('oglasi/manage',[OglasController::class, 'manage'])->middleware('auth');
//Jedan oglas
Route::get('/oglasi/{oglas}', [OglasController::class,'show']);
//Registration screeb
Route::get('/register',[UserController::class, 'create'])->middleware('guest');
//Registrira usera
Route::post('/users',[UserController::class, 'store']);
//Odlogiranje
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');
//login
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
//funkcija za login
Route::post('/users/authenticate',[UserController::class, 'authenticate']);

