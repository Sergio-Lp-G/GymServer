<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\ActivityController;

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

//Route::resource('activities', ActivityController::class);

//Route::get('activities/create', [ActivityController::class, 'create']);
Route::get('activities', [ActivityController::class, 'index']);
Route::get('activities/create', [ActivityController::class, 'create']);
Route::get('activities/show/{id}', [ActivityController::class, 'show']);
Route::get('activities/edit/{id}', [ActivityController::class, 'edit']);
Route::post('activities', [ActivityController::class, 'store']);
Route::put('activities/update/{request}/{id}', [ActivityController::class, 'destroy']);
Route::delete('activities/store/{request}', [ActivityController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});

Route::resource('members',MemberController::class);
