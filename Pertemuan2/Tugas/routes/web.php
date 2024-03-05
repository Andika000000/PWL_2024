<?php

use App\Http\Controllers\HomePage;
use App\Http\Controllers\ProductsPage;
use App\Http\Controllers\SalesPage;
use App\Http\Controllers\UserPage;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomePage::class, 'home']);

Route::get('/product', [ProductsPage::class, 'index']);
Route::prefix('/category')->group(function () {
    Route::get('food-beverage', [ProductsPage::class, 'foodbeverage']);
    Route::get('home-care', [ProductsPage::class, 'homecare']);
    Route::get('beauty-health', [ProductsPage::class, 'beautyhealth']);
    Route::get('baby-kid', [ProductsPage::class, 'babykid']);
});

Route::get('/user', [userpage::class,'user']);


Route::get('/sales', [salesPage::class,'sales']);
