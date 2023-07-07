<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PelangganController;
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

Route::middleware('auth')->group(function(){
    Route::get('/', [UserController::class, 'index']);
    Route::post('/logout', [UserController::class, 'logout']);

    Route::get('/user', [UserController::class, 'listUser']);
    Route::get('/user/add', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
    Route::post('/user/destroy', [UserController::class, 'destroy']);

    Route::get('/golongan', [GolonganController::class, 'index']);
    Route::get('/golongan/add', [GolonganController::class, 'create']);
    Route::post('/golongan/store', [GolonganController::class, 'store']);
    Route::get('/golongan/edit/{id}', [GolonganController::class, 'edit']);
    Route::post('/golongan/update', [GolonganController::class, 'update']);
    Route::get('/golongan/delete/{id}', [GolonganController::class, 'delete']);
    Route::post('/golongan/destroy', [GolonganController::class, 'destroy']);

    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/pelanggan/add', [PelangganController::class, 'create']);
    Route::post('/pelanggan/store', [PelangganController::class, 'store']);
    Route::get('/pelanggan/detail/{id}', [PelangganController::class, 'show']);
    Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
    Route::post('/pelanggan/update', [PelangganController::class, 'update']);
    Route::get('/pelanggan/delete/{id}', [PelangganController::class, 'delete']);
    Route::post('/pelanggan/destroy', [PelangganController::class, 'destroy']);
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginCheck', [LoginController::class, 'loginCheck']);