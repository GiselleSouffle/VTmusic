<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\generController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\artistController;
use App\Http\Controllers\Api\albumController;
use App\Http\Controllers\Api\commentController;
use App\Http\Controllers\Api\songController;
use App\Http\Controllers\Api\userController;
use App\Http\Controllers\Api\voteController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/albums',[albumController::class, 'list']);
Route::get('/albums/{id}',[albumController::class, 'show']);
Route::post('/albums/create',[albumController::class, 'create']);
Route::post('/albums/{id}/update',[albumController::class, 'update']);

Route::get('/artists',[artistController::class, 'list']);
Route::get('/artists/{id}',[artistController::class, 'show']);
Route::post('/artists/create',[artistController::class, 'create']);
Route::post('/artists/{id}/update',[artistController::class, 'update']);

Route::get('/comments',[commentController::class, 'list']);
Route::get('/comments/{id}',[commentController::class, 'show']);
Route::post('/comments/create',[commentController::class, 'create']);
Route::post('/comments/{id}/update',[commentController::class, 'update']);

Route::get('/geners',[generController::class, 'list']);
Route::get('/geners/{id}',[generController::class, 'show']);
Route::post('/geners/create',[generontroller::class, 'create']);
Route::post('/geners/{id}/update',[generController::class, 'update']);

Route::get('/songs',[songController::class, 'list']);
Route::get('/songs/{id}',[songController::class, 'show']);
Route::post('/songs/create',[songController::class, 'create']);
Route::post('/songs/{id}/update',[songController::class, 'update']);

Route::get('/users',[userController::class, 'list']);
Route::get('/users/{id}',[userController::class, 'show']);
Route::post('/users/create',[userController::class, 'create']);
Route::post('/users/{id}/update',[userController::class, 'update']);

Route::get('/votes',[voteController::class, 'list']);
Route::get('/votes/{id}',[voteController::class, 'show']);
Route::post('/votes/create',[voteController::class, 'create']);
Route::post('/votes/{id}/update',[voteController::class, 'update']);

Route::post('/login',[AuthController::class, 'login']);