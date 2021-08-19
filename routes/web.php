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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('master');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/order_place', function () {
    return view('order_place');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/', 'App\Http\Controllers\MainController@master');
Route::get('/product', 'App\Http\Controllers\MainController@index');
