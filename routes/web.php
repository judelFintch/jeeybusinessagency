<?php

use App\Http\Controllers\Backend\ArticleBackendController;
use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\ValveBackendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [HomeBackendController::class, 'index'])->name('backend.index');
    Route::resource('article', ArticleBackendController::class);
    Route::resource('valves', ValveBackendController::class);
});


Route::get('/', [HomeFrontendController::class, 'index'])->name('home.index');
Route::get('/article/{key}', [HomeFrontendController::class, 'show'])->name('article.show');
Route::get('/section', [App\Http\Controllers\MainController::class, 'section'])->name('section');
Route::get('/job', [App\Http\Controllers\MainController::class, 'inscription'])->name('job');
Route::get('/inscription', [App\Http\Controllers\MainController::class, 'inscription'])->name('inscription');
