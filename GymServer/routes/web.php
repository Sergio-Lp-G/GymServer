<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
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
Route::resource('users', UserController::class)->middleware('auth'); //para controlar que solo los registrados entren

Route::post('/activities/{id}/destroy', [ActivityController::class, 'destroy']);
Route::get('/activities/busqueda', [ActivityController::class, 'busqueda']);
Route::get('/activities/search', [ActivityController::class, 'search']);
Route::post('/activities/filter', [ActivityController::class, 'filter']);
Route::post('activity/update', [ActivityController::class, 'update']);

Route::resource('bookings', BookingController::class)->middleware('auth'); //
Route::resource('activities', ActivityController::class)->middleware('auth');
Route::resource('sesions', SesionController::class)->middleware('auth');
Route::get('sesions/sign/{id}', [SesionController::class, 'sign']);

Auth::routes();
