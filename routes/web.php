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

// Route::get('/', function () {
//     return view('welcome');
// });

/** Halaman Utama */
Route::get('/',[\App\Http\Controllers\BaseController::class,'index'])->name('index');
Route::get('/courses',[\App\Http\Controllers\BaseController::class,'courses'])->name('courses');
Route::get('/programs',[\App\Http\Controllers\BaseController::class,'programs'])->name('programs');
Route::get('/teachers',[\App\Http\Controllers\BaseController::class,'teachers'])->name('teachers');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
