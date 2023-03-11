<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\RouterController;
use App\Http\Controllers\UsuarioController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/vehicles', [VehiclesController::class, 'datos']);
Route::get('/vehicles/{id}', [VehiclesController::class, 'dato']);
Route::post('/vehicles', [VehiclesController::class, 'create']);
Route::delete('/vehicles/{id}', [VehiclesController::class, 'destroy']);
Route::put('/vehicles/{id}', [VehiclesController::class, 'update']);

Route::get('/drivers', [DriversController::class, 'datos']);
Route::get('/drivers/{id}', [DriversController::class, 'dato']);
Route::post('/drivers', [DriversController::class, 'create']);
Route::delete('/drivers/{id}', [DriversController::class, 'destroy']);
Route::put('/drivers/{id}', [DriversController::class, 'update']);

Route::get('/schedules', [SchedulesController::class, 'datos']);
Route::get('/schedules/{id}', [SchedulesController::class, 'dato']);
Route::post('/schedules', [SchedulesController::class, 'create']);
Route::delete('/schedules/{id}', [SchedulesController::class, 'destroy']);
Route::put('/schedules/{id}', [SchedulesController::class, 'update']);

Route::get('/router', [RouterController::class, 'datos']);
Route::get('/router/{id}', [RouterController::class, 'dato']);
Route::post('/router', [RouterController::class, 'create']);
Route::delete('/router/{id}', [RouterController::class, 'destroy']);
Route::put('/router/{id}', [RouterController::class, 'update']);

Route::get('/usuario/{alias}', [UsuarioController::class, 'dato']);
Route::post('/usuario', [UsuarioController::class, 'create']);