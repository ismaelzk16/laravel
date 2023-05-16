<?php

use App\Http\Controllers\API\PartidoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\EntradasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|

*/

Route::post('login', [UserController::class, 'login']);
Route::post('plantilla', [UserController::class, 'plantilla']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware(middleware:'auth:sanctum');
Route::get('users', [UserController::class, 'show']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::post('/users/{id}/edit', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'delete']);

Route::post('crear', [EntradasController::class, 'crear']);

Route::post('anadir', [PartidoController::class, 'add']);
Route::get('partidos', [PartidoController::class, 'show']);
Route::get('/partidos/{id}/edit', [PartidoController::class, 'edit']);
Route::post('/partidos/{id}/edit', [PartidoController::class, 'update']);
Route::delete('partidos/{id}', [PartidoController::class, 'delete']);

Route::post('entradas', [EntradasController::class, 'save']);
Route::get('entradas', [EntradasController::class, 'showEntradas']);
Route::post('realizarCompra', [EntradasController::class, 'comprarEntradas']);
Route::get('entradas/get', [EntradasController::class, 'getEntradas']);
Route::delete('partidos/{id}', [PartidoController::class, 'delete']);

Route::group(['prefix' => 'post', 'middleware' => 'auth:sanctum'], function(){
    Route::get('/', [PostController::class, 'index']);
    Route::get('add', [PostController::class, 'add']);
});

/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
