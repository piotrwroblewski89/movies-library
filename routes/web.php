<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::get('/products', 'ProductPageController@index')->name('product-page');
Route::get('/pruducts/{pruduct}','ProductPageController@show')->name('product.show');
Route::view('/checkout', 'checkout');
Route::view('/auth', 'auth');
Route::view('/about-us', 'about-us');
Route::view('/contact', 'contact');
Route::view('/register', 'register');

Route::get('/add-to-cart/{id}', [ 
    'uses' => 'ProductPageController@getAddToCart',
    'as'=> 'product.addToCart'
]);

Route::get('/cart', [ 
    'uses' => 'ProductPageController@getCart',
    'as'=> 'product.shoppintCart'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductPageController@getRemove',
    'as' => 'product.remove',
    
    
    ]);

Route::get('/reduce/{id}', [
'uses' => 'ProductPageController@getReduce',
'as' => 'product.reduce',


]);