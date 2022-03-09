<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/cart',[CartController::class, "showCart"]);

Route::get('/',[HomeController::class, "showHome"]);

Route::get('/product',[ProductController::class, "showProduct"]);

Route::get('/product/{id}',[ProductController::class, "ShowProductId"]);


