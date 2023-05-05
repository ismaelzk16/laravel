<?php

use App\Http\Controllers\API\PartidoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PostController;

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
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware(middleware:'auth:sanctum');

Route::post('crear', [EntradasController::class, 'crear']);

Route::post('anadir', [PartidoController::class, 'add']);
Route::get('partidos', [PartidoController::class, 'show']);
Route::get('/partidos/{id}/editar', [PartidoController::class, 'editar']);


Route::group(['prefix' => 'post', 'middleware' => 'auth:sanctum'], function(){
    Route::get('/', [PostController::class, 'index']);
    Route::get('add', [PostController::class, 'add']);
});

/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
