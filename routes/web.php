<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\UniveristyController;
use App\Http\Middleware\UserIsLogged;
use App\Http\Middleware\UserIsStudent;
use App\Http\Middleware\UserIsUniversity;
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
Route::get('/search', [UniveristyController::class, 'index']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AccountController::class, 'loginPage']);
    Route::post('/login', [AccountController::class, 'createSession']);
    Route::get('/register', [AccountController::class, 'registerPage']);
    Route::post('/register', [AccountController::class, 'registerAccount']);
});
Route::group(['middleware' => UserIsLogged::class], function () {
    Route::get('/logout', [AccountController::class, 'deleteSession']);
    Route::get('/profile', [AccountController::class, 'viewProfile']);
    Route::post('/profile/update', [AccountController::class, 'updateProfile']);

    Route::group(['middleware' => UserIsUniversity::class], function () {
        Route::get('/admissions', [AdmissionController::class, 'viewAdmissions']);
        Route::post('/university/update', [AccountController::class, 'updateUniversity']);
    });
    Route::group(['middleware' => UserIsStudent::class], function () {
        Route::get('/my-admissions', [AdmissionController::class, 'viewMyAdmissions']);
    });
});


// set up migration endpoint
Route::get('/_db/_migrate', [MigrationController::class, 'index']);
