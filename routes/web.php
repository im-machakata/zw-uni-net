<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UniveristyController;
use App\Http\Middleware\UserIsLogged;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/programs', [ProgramController::class, 'index']);
Route::get('/universities', [UniveristyController::class, 'index']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AccountController::class, 'loginPage']);
    Route::post('/login', [AccountController::class, 'createSession']);
    Route::get('/register', [AccountController::class, 'registerPage']);
    Route::post('/register', [AccountController::class, 'registerAccount']);
});
Route::group(['middleware' => UserIsLogged::class], function () {
    Route::get('/profile', [AccountController::class, 'viewProfile']);
});
