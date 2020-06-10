<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::get('/products', 'ProductPageController@index')->name('product-page');
Route::get('/pruducts/{pruduct}','ProductPageController@show')->name('product.show');

Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/auth', 'auth');
Route::view('/about-us', 'about-us');
Route::view('/contact', 'contact');
Route::view('/register', 'register');