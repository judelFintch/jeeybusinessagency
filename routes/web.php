<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('default');
Route::get('/about_us', [App\Http\Controllers\MainController::class, 'about'])->name('about_us');
Route::get('/section', [App\Http\Controllers\MainController::class, 'section'])->name('section');
Route::get('/job', [App\Http\Controllers\MainController::class, 'inscription'])->name('job');
Route::get('/inscription', [App\Http\Controllers\MainController::class, 'inscription'])->name('inscription');
