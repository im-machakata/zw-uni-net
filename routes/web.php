<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\UniveristyController;
use App\Http\Middleware\UserIsLogged;
use App\Http\Middleware\UserIsStudent;
use App\Http\Middleware\UserIsUniversity;
use App\Livewire\Create\ProgramRequirements;
use App\Livewire\Create\Qualifications;
use App\Livewire\Create\University;
use App\Livewire\Create\UniversityPrograms;
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
Route::get('/contact-us', [FeedbackController::class, 'create']);
Route::post('/contact-us', [FeedbackController::class, 'store']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AccountController::class, 'loginPage']);
    Route::post('/login', [AccountController::class, 'createSession']);
    Route::get('/register', [AccountController::class, 'registerPage']);
    Route::post('/register', [AccountController::class, 'registerAccount']);
});
Route::group(['middleware' => UserIsLogged::class], function () {
    Route::get('/search', [UniveristyController::class, 'search']);
    Route::get('/logout', [AccountController::class, 'deleteSession']);
    Route::get('/profile', [AccountController::class, 'viewProfile']);
    Route::post('/profile/update', [AccountController::class, 'updateProfile']);

    Route::group(['middleware' => UserIsUniversity::class], function () {
        Route::get('/universities', University::class);
        Route::post('/universities', [UniveristyController::class, 'create']);
        Route::post('/universities/{id}/update', [UniveristyController::class, 'update']);
        Route::get('/universities/{id}/edit', [UniveristyController::class, 'edit']);
        Route::get('/universities/{id}/delete', [UniveristyController::class, 'delete']);
        Route::get('/messages', [FeedbackController::class, 'index']);
        Route::get('/messages/{id}/view', [FeedbackController::class, 'show']);
        Route::get('/messages/{id}/delete', [FeedbackController::class, 'destroy']);
        Route::get('/program/{id}/requirements', ProgramRequirements::class);
        Route::get('/universities/{id}/programs', UniversityPrograms::class);
    });
    Route::group(['middleware' => UserIsStudent::class], function () {
        Route::get('/qualifications', Qualifications::class);
    });
    Route::get('/universities/{id}/view', [UniveristyController::class, 'show']);
});

// set up migration endpoint
Route::get('/_db/_migrate', [MigrationController::class, 'index']);
