<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

\Auth::routes();

Route::get('/home', ['as' =>'home', 'uses' => 'HomeController@index']);

Route::group(['namespace'=> 'User', 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('/',                 ['as' => 'index',   'uses' => 'UserController@index'    ]);
    Route::get('/edit/{id}',        ['as' => 'edit',   'uses' => 'UserController@edit'      ]);
    Route::post('/update/{id}',     ['as' => 'update',   'uses' => 'UserController@update'  ]);


    Route::group(['namespace'=> 'Profile', 'prefix' => 'profile', 'as' => 'profile.'], function(){
        Route::get('/',             ['as' => 'index',   'uses' => 'ProfileController@index' ]);
        Route::get('/edit/{id}',    ['as' => 'edit',   'uses' => 'ProfileController@edit'   ]);
        Route::post('/store',       ['as' => 'store',   'uses' => 'ProfileController@store' ]);
        Route::post('/update/{id}',       ['as' => 'update',   'uses' => 'ProfileController@update' ]);

    });
});
