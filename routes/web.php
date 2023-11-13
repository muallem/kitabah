<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
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
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('home');
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => ['my.auth', 'admin']], function () {
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['my.auth', 'student']], function () {
    Route::group(['controller' => StudentController::class, 'prefix' => 'student', 'as' => 'student.'], function () {
        Route::get('/', 'index')->name('index');
    });
});
