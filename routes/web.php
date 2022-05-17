<?php

use App\Http\Controllers\Backend\ArticleBackendController;
use App\Http\Controllers\Backend\GalleryBackendController;
use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\UserBackendController;
use App\Http\Controllers\Backend\ValveBackendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\OrganizationFrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [HomeBackendController::class, 'index'])->name('backend.index');
    Route::resource('article', ArticleBackendController::class);
    Route::resource('valves', ValveBackendController::class);
    Route::resource('galleries', GalleryBackendController::class);
    Route::resource('utilisateur', UserBackendController::class);

    Route::put('activeArticle/{key}', [ArticleBackendController::class, 'confirmed'])
        ->name('article.active');
    Route::put('inactiveArticle/{key}', [ArticleBackendController::class, 'unconfirmed'])
        ->name('article.inactive');

    Route::put('activeUsers/{key}', [UserBackendController::class, 'confirmed'])
        ->name('utilisateur.active');
    Route::put('inactiveUsers/{key}', [UserBackendController::class, 'unconfirmed'])
        ->name('utilisateur.inactive');
});



Route::get('/', [HomeFrontendController::class, 'index'])->name('home.index');
Route::get('/about', [HomeFrontendController::class, 'about'])->name('home.about');
Route::get('/bloc_un.html', [HomeFrontendController::class, 'bloc_un'])->name('front.bloc_un');
Route::get('/bloc_deux.html', [HomeFrontendController::class, 'bloc_deux'])->name('front.bloc_deux');
Route::get('/visionnaire.html', [HomeFrontendController::class, 'visionnaire'])->name('front.visionnaire');

//organisation route
Route::get('/oganisation_maternelle.html', [OrganizationFrontendController::class, 'sectionMat'])->name('front.maternelle');
Route::get('/organisation_primaire.html', [OrganizationFrontendController::class, 'sectionPri'])->name('front.primaire');
Route::get('/organisation_secondaire.html', [OrganizationFrontendController::class, 'sectionSec'])->name('front.secondaire');



Route::get('/nos-article/{key}', [HomeFrontendController::class, 'show'])->name('article.voirplus');
Route::get('/all_articles', [HomeFrontendController::class, 'all_articles'])->name('article.all');
Route::get('/section', [App\Http\Controllers\MainController::class, 'section'])->name('section');
Route::get('/about_us', [App\Http\Controllers\MainController::class, 'section'])->name('about_us');
Route::get('/job', [App\Http\Controllers\MainController::class, 'inscription'])->name('job');
Route::get('/underconstruct', [HomeFrontendController::class, 'under'])->name('underconstruct');
Route::get('/inscription', [App\Http\Controllers\MainController::class, 'inscription'])->name('inscription');
