<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;




// Route::get('/order/submit', function () {
//     return Request::all();
// })->name('order-data');

// Route::get('/cart/order', function () {
//     return "Завершаем заказ";
// });

// Route::get('/order/order_place', function () {
//     dd(Request::all());
// })->name('order_place');


Route::get('/', 'App\Http\Controllers\MainController@master')->name('master');
Route::get('/product/cart', 'App\Http\Controllers\MainController@cart')->name('product-data');
Route::get('/product', 'App\Http\Controllers\MainController@master');
Route::get('/order', 'App\Http\Controllers\MainController@order')->name('order');
Route::get('/cart', 'App\Http\Controllers\MainController@cart')->name('cart');
Route::get('/master', 'App\Http\Controllers\MainController@master')->name('master');
Route::get('/order_place', 'App\Http\Controllers\MainController@order_place')->name('order_place');
Route::get('/order/order_place', 'App\Http\Controllers\MainController@order_place')->name('order_place-data');
Route::get('/cart/order', 'App\Http\Controllers\MainController@order')->name('order-data');
