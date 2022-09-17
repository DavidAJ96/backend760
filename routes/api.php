<?php

use App\Http\Controllers\Api\Persona\PersonaIndexController;
use App\Http\Controllers\Api\Persona\PersonaShowController;
use App\Http\Controllers\Api\Persona\PersonaStoreController;
use App\Http\Controllers\Api\PersonaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('personas',PersonaIndexController::class);
Route::get('personas/{id}',PersonaShowController::class);
Route::post('personas',PersonaStoreController::class);
//Route::resource('personas',PersonaController::class);
