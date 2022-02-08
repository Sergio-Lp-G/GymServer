<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UserController;
use App\Models\Sesion;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::resource('activities', ActivityController::class);
Route::resource('sesions', SesionController::class);
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
