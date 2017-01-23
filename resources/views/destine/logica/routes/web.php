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

Route::get('/home',                         ['as' =>'home',         'uses' => 'HomeController@index']);

Route::group(['namespace'=> 'User', 'middleware' => 'auth', 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('/',                         ['as' => 'index',       'uses' => 'UserController@index'    ]);
    Route::get('/edit/{id}',                ['as' => 'edit',        'uses' => 'UserController@edit'      ]);
    Route::post('/update/{id}',             ['as' => 'update',      'uses' => 'UserController@update'  ]);


    Route::group(['namespace'=> 'Profile', 'prefix' => 'profile', 'as' => 'profile.'], function(){
        Route::get('/',                     ['as' => 'index',       'uses' => 'ProfileController@index' ]);
        Route::get('/create',               ['as' => 'create',      'uses' => 'ProfileController@create' ]);
        Route::get('/edit',                 ['as' => 'edit',        'uses' => 'ProfileController@edit'   ]);
        Route::post('/store',               ['as' => 'store',       'uses' => 'ProfileController@store' ]);
        Route::put('/{profile}/update',     ['as' => 'update',      'uses' => 'ProfileController@update' ]);

    });

    Route::group(['namespace'=> 'Car', 'prefix' => 'car', 'as' => 'car.'], function(){
        Route::get('/',                     ['as' => 'index',       'uses' =>  'CarController@index' ]);
        Route::get('/create',               ['as' => 'create',      'uses' =>  'CarController@create' ]);
        Route::post('/store',               ['as' => 'store',       'uses' =>  'CarController@store' ]);
        Route::get('/{car}/edit',           ['as' => 'edit',        'uses' =>  'CarController@edit'   ]);
        Route::post('/{car}/update',        ['as' => 'update',      'uses' =>  'CarController@update' ]);
        Route::get('/{car}/delete',         ['as' => 'delete',      'uses' =>  'CarController@destroy' ]);

    });

    Route::group(['namespace'=> 'Destine', 'prefix' => 'destine', 'as' => 'destine.'], function(){
        Route::get('/',                     ['as' => 'index',       'uses' =>  'DestineController@index' ]);
        Route::get('/create',               ['as' => 'create',      'uses' =>  'DestineController@create' ]);
        Route::post('/store',               ['as' => 'store',       'uses' =>  'DestineController@store' ]);
        Route::get('{destine}/edit',        ['as' => 'edit',        'uses' =>  'DestineController@edit'   ]);
        Route::put('{destine}/update',      ['as' => 'update',      'uses' =>  'DestineController@update' ]);
        Route::get('{destine}/delete',      ['as' => 'delete',      'uses' =>  'DestineController@destroy' ]);
    });

    Route::group(['namespace'=> 'Diary', 'prefix' => 'diary', 'as' => 'diary.'], function(){
        Route::get('/',                     ['as' => 'index',       'uses' =>  'DiaryController@index' ]);
        Route::get('/create',               ['as' => 'create',      'uses' =>  'DiaryController@create' ]);
        Route::post('/store',               ['as' => 'store',       'uses' =>  'DiaryController@store' ]);
        Route::get('/edit',          ['as' => 'edit',        'uses' =>  'DiaryController@edit'   ]);
        Route::put('{diary}/update',        ['as' => 'update',      'uses' =>  'DiaryController@update' ]);
        Route::get('{diary}/delete',        ['as' => 'delete',      'uses' =>  'DiaryController@destroy' ]);
    });
});
