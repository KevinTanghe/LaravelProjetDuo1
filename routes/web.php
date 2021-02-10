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
Route::post('/back-Store-reseau', [BackController::class, 'storeReseau']);
Route::post('/delete-reseau/{id}', [BackController::class, 'destroyReseau']);

Route::get('/back/lihome', [BackController::class, 'liHome']);
Route::post('/back-Store-lihome', [BackController::class, 'storeHome']);
Route::post('/delete-lihome/{id}', [BackController::class, 'destroyHome']);

Route::get('/back/liabout', [BackController::class, 'liAbout']);
Route::post('/back-Store-liabout', [BackController::class, 'storeAbout']);
Route::post('/delete-liabout/{id}', [BackController::class, 'destroyAbout']);

Route::get('/back/cardarticle', [BackController::class, 'cardArticle']);
Route::post('/back-Store-card', [BackController::class, 'storeCard']);
Route::post('/delete-card/{id}', [BackController::class, 'destroyCard']);