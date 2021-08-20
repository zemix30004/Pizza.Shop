<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });




// Route::get('/order/submit', function () {
//     return Request::all();
// })->name('order-form');

// Route::get('/cart/order', function () {
//     return "Завершаем заказ";
// });

// Route::get('/order/order_place', function () {
//     dd(Request::all());
// })->name('order_place');

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\MainController@master')->name('master');
Route::get('/product/cart', 'App\Http\Controllers\MainController@cart')->name('product-data');
Route::get('/product', 'App\Http\Controllers\MainController@master');
Route::get('/order', 'App\Http\Controllers\MainController@order')->name('order');
Route::get('/cart', 'App\Http\Controllers\MainController@cart')->name('cart');
Route::get('/master', 'App\Http\Controllers\MainController@master')->name('master');
Route::get('/order_place', 'App\Http\Controllers\MainController@order_place')->name('order_place');
Route::get('/order/order_place', 'App\Http\Controllers\MainController@order_place')->name('order_place-data');
Route::get('/cart/order', 'App\Http\Controllers\MainController@order')->name('order-data');
