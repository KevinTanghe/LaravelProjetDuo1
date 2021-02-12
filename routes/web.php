<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/back', [BackController::class, 'index']);

Route::get('/back/reseau', [BackController::class, 'reseau']);
Route::get('/edit-reseau/{id}', [BackController::class, 'editReseau']);
Route::post('/back-Store-reseau', [BackController::class, 'storeReseau']);
Route::post('/delete-reseau/{id}', [BackController::class, 'destroyReseau']);
Route::post('/update-reseau/{id}', [BackController::class, 'updateReseau']);


Route::get('/back/lihome', [BackController::class, 'liHome']);
Route::get('/edit-liHome/{id}', [BackController::class, 'editHome']);
Route::post('/back-Store-lihome', [BackController::class, 'storeHome']);
Route::post('/delete-lihome/{id}', [BackController::class, 'destroyHome']);
Route::post('/update-lihome/{id}', [BackController::class, 'updateHome']);

Route::get('/back/liabout', [BackController::class, 'liAbout']);
Route::get('/edit-liabout/{id}', [BackController::class, 'editAbout']);
Route::post('/back-Store-liabout', [BackController::class, 'storeAbout']);
Route::post('/delete-liabout/{id}', [BackController::class, 'destroyAbout']);
Route::post('/update-liabout/{id}', [BackController::class, 'updateAbout']);


Route::get('/back/cardarticle', [BackController::class, 'cardArticle']);
Route::get('/card-show/{id}',[BackController::class, 'show']);
Route::get('/edit-card/{id}', [BackController::class, 'editCard']);
Route::post('/back-Store-card', [BackController::class, 'storeCard']);
Route::post('/delete-card/{id}', [BackController::class, 'destroyCard']);
Route::post('/update-card/{id}', [BackController::class, 'updateCard']);