<?php

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('category/delete/{id}', 'CategoryController@delete');
    Route::resource('category', 'CategoryController')->except(['show','destroy']);
    Route::get('product/delete/{id}', 'ProductController@delete');
    Route::resource('product', 'ProductController');
    Route::get('brand/delete/{id}', 'BrandController@delete');
    Route::resource('brand', 'BrandController');
});
