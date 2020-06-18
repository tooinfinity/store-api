<?php



    // Route group fo guests user only

    Route::group(['middleware' => ['guest:api']], function () {

        Route::post('login', 'api\v1\LoginController@login');
    });

    // Route group fo authenticade user only

    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('getuser', 'api\v1\LoginController@getUser');
        Route::post('logout', 'api\v1\LoginController@logout');

        // route allowed to the administator
        Route::group(['middleware' => ['role:administrator']], function(){
            Route::post('register', 'api\v1\RegisterController@register');
            Route::get('getallusers', 'api\v1\UserController@getAllUsers');
        });

        // route allowed to the cashier
        Route::group(['middleware' => ['role:cashier']], function(){});
    });
