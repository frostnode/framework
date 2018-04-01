<?php

Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'auth',
        'namespace' => 'Modules\Auth\Http\Controllers'
    ],
    function () {

        // Authentication Routes...
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login')->name('login');
        Route::post('logout', 'LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register')->name('register');

        // Password Reset Routes...
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset');
    }
);
