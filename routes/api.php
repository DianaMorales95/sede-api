<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserappController;
use App\Http\Controllers\StepOneController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('rol',[RolController::class, 'index']);
Route::post('rol',[RolController::class, 'store']);

Route::get('area',[AreaController::class, 'index']);
Route::post('area',[AreaController::class, 'store']);

Route::get('client',[ClientController::class, 'index']);
Route::post('client',[ClientController::class, 'store']);


Route::get('rating',[RatingController::class, 'index']);
Route::post('rating',[RatingController::class, 'store']);

Route::get('employee',[EmployeeController::class, 'index']);
Route::post('employee',[EmployeeController::class, 'store']);

Route::get('userapp',[UserappController::class, 'index']);
Route::post('userapp',[UserappController::class, 'store']);

Route::get('stepone',[StepOneController::class, 'index']);
Route::post('stepone',[StepOneController::class, 'store']);

//Route::apiResource("rol", "RolController");
