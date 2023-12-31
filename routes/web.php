<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/tes', function() {
    return view('index');
});

Route::view('/', 'index');
Route::get('/user', [UserController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);