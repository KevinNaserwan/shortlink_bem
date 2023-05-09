<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Login;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Shortlink;
use GuzzleHttp\Cookie\SessionCookieJar;
use Illuminate\Support\Facades\Route;

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

//Route inti
Route::get('/link', [Shortlink::class, 'show', 'middleware' => ['auth']]);
Route::get('/link/{id}', [Shortlink::class, 'linkshort', 'middleware' => ['auth']]);

//Route Login
Route::post('/shortlink', [AuthController::class, 'login'])->middleware('guest');
Route::get('/shortlink', [SessionController::class, 'login'])->name('login')->middleware('guest');

//Route Logout
Route::get('/logout', [AuthController::class, 'logout', 'middleware' => ['auth']]);

//Route tambah data
Route::get('/tambah', [SessionController::class, 'tambah', 'middleware' => ['auth']]);
Route::post('/tambah/data', [Shortlink::class, 'add', 'middleware' => ['auth']]);

//Route Detail
Route::get('/detail/{id}', [SessionController::class, 'detail', 'middleware' => ['auth']]);

//Route edit
Route::get('/detail-edit/{id}', [SessionController::class, 'edit', 'middleware' => ['auth']]);
Route::put('/detail/edit/{id}', [Shortlink::class, 'update', 'middleware' => ['auth']]);


//Route delete 
Route::delete('delete/{id}', [Shortlink::class, 'delete', 'middleware' => ['auth']]);
