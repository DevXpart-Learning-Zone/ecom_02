<?php
Route::namespace('Web')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::get('/admin', function () {
    return redirect('admin/login');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Admin\Auth\LoginController@login');
    Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');

    //Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('register');
    //Route::post('/register', 'Admin\Auth\RegisterController@register');

    Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'customer'], function () {
    Route::namespace('Web')->group(function () {
        Route::get('/login', 'Customer\Auth\LoginController@showLoginForm')->name('login');
        Route::post('/login', 'Customer\Auth\LoginController@login');
        Route::post('/logout', 'Customer\Auth\LoginController@logout')->name('logout');

        Route::get('/register', 'Customer\Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'Customer\Auth\RegisterController@register');

        Route::post('/password/email', 'Customer\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
        Route::post('/password/reset', 'Customer\Auth\ResetPasswordController@reset')->name('password.email');
        Route::get('/password/reset', 'Customer\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
        Route::get('/password/reset/{token}', 'Customer\Auth\ResetPasswordController@showResetForm');
    });
});