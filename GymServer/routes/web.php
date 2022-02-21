<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UserController;
use App\Models\Sesion;
use Database\Seeders\ActivitySeeder;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class)->middleware('auth');//para controlar que solo los registrados entren
Route::get('/activities/busqueda', [ActivityController::class, 'busqueda']);
Route::get('/activities/search', [ActivityController::class, 'search']);
Route::post('/activities/filter', [ActivityController::class, 'filter']);
Route::resource('activities', ActivityController::class)->middleware('auth');
Route::resource('sesions', SesionController::class)->middleware('auth');
Route::get('sesions/sign/{id}', [SesionController::class, 'sign']);

/*Route::get('activities/create', [ActivityController::class, 'create']);
Route::get('activities', [ActivityController::class, 'index']);
Route::get('activities/create', [ActivityController::class, 'create']);
Route::get('activities/show/{id}', [ActivityController::class, 'show']);
Route::get('activities/edit/{id}', [ActivityController::class, 'edit']);
Route::post('activities', [ActivityController::class, 'store']);
Route::put('activities/update/{request}/{id}', [ActivityController::class, 'destroy']);
Route::delete('activities/store/{request}', [ActivityController::class, 'destroy']);*/

Auth::routes();
