<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenerController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/old', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Admin', [AdminController::class,'admin'])->name('admin');

Route::get('/Admin/Album', [AlbumController::class,'index'])->name('index');

Route::get('/Admin/Artist', [ArtistController::class,'index'])->name('index');

Route::get('/Admin/Comment', [CommentController::class,'index'])->name('index');

Route::get('/Admin/Gener', [GenerController::class,'index'])->name('index');

Route::get('/Admin/Song', [SongController::class,'index'])->name('index');

Route::get('/Admin/User', [UserController::class,'index'])->name('index');

Route::get('/Admin/Vote', [VoteController::class,'index'])->name('index');
