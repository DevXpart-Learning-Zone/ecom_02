<?php

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('category', 'CategoryController')->except(['show']);
    Route::resource('product', 'ProductController');
});