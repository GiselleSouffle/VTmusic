<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GenerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\SongController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VoteController;



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

Route::get('/albums',[AlbumController::class, 'list']);
Route::get('/albums/{id}',[AlbumController::class, 'show']);
Route::post('/albums/create',[AlbumController::class, 'create']);
Route::post('/albums/{id}/update',[AlbumController::class, 'update']);

Route::get('/artists',[ArtistController::class, 'list']);
Route::get('/artists/{id}',[ArtistController::class, 'show']);
Route::post('/artists/create',[ArtistController::class, 'create']);
Route::post('/artists/{id}/update',[ArtistController::class, 'update']);

Route::get('/comments',[CommentController::class, 'list']);
Route::get('/comments/{id}',[CommentController::class, 'show']);
Route::post('/comments/create',[CommentController::class, 'create']);
Route::post('/comments/{id}/update',[CommentController::class, 'update']);

Route::get('/geners',[GenerController::class, 'list']);
Route::get('/geners/{id}',[GenerController::class, 'show']);
Route::post('/geners/create',[GenerController::class, 'create']);
Route::post('/geners/{id}/update',[GenerController::class, 'update']);

Route::get('/songs',[SongController::class, 'list']);
Route::get('/songs/{id}',[SongController::class, 'show']);
Route::post('/songs/create',[SongController::class, 'create']);
Route::post('/songs/{id}/update',[SongController::class, 'update']);

Route::get('/users',[UserController::class, 'list']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::post('/users/create',[UserController::class, 'create']);
Route::post('/users/{id}/update',[UserController::class, 'update']);

Route::get('/votes',[VoteController::class, 'list']);
Route::get('/votes/{id}',[VoteController::class, 'show']);
Route::post('/votes/create',[VoteController::class, 'create']);
Route::post('/votes/{id}/update',[VoteController::class, 'update']);

Route::post('/login',[AuthController::class, 'login']);