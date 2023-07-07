<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [PublicController::class, "welcome"])->name("homePage");
Route::get('/product/form', [ProductController::class, "form"])->name("formPage"); 
Route::post('/product/create', [ProductController::class, "createProduct"])->name("productCreation");
Route::get('product/dettaglio/{idProduct}', [PublicController::class, "dettaglioProdotto"])->name("prodottoDettaglio"); 
Route::get('brand/show/{brand}', [ProductController::class, "showBrand"])->name("brandShow"); 
Route::get('/review/form', [ReviewController::class, "inForm"])->name("pageReview"); 
Route::post('/review/add', [ReviewController::class, "createReview"])->name("reviewCreate"); 
Route::get('/thankYou/page/{nameRedirect}', [ReviewController::class, "showThank"])->name("thankPage"); 
