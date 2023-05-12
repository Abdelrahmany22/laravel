<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//---------------------------------frontend-----------------------------------
Route::get('frontend/home', 'frontend\HomeController@index')->name('frontend.home');
Route::get('frontend/addToCart/{id}','frontend\HomeController@addToCart' )->name('frontend.addToCart')->middleware('auth');
Route::get('frontend/deleteFromCart/{id}','frontend\HomeController@deleteFromCart' )->name('frontend.deleteFromCart')->middleware('auth');

Route::get('cart' , 'frontend\HomeController@viewCart')->name('frontend.viewcart')->middleware('auth');

//---------------------------------back-----------------------------------
Route::get('backend/dashboard','backend\AdminController@dashboard')->name('backend.dashboard');
Route::get('backend/product/list','backend\ProductController@listProducts')->name('backend.product.list');

