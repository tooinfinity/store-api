<?php



    // Route group fo guests user only

    Route::group(['middleware' => ['guest:api']], function () {

        Route::post('login', 'api\v1\LoginController@login');
        Route::post('register', 'api\v1\RegisterController@register');
    });

    // Route group fo authenticade user only

    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('me', 'api\v1\LoginController@me');
        Route::post('logout', 'api\v1\LoginController@logout');
    });
