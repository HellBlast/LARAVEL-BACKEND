<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiclesController;

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