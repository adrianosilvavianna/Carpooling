<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



\Auth::routes();

    Route::get('/welcome',                          ['as' =>'welcome',          'uses' => 'HomeController@welcome']);
    Route::get('/about',                            ['as' =>'about',            'uses' => 'HomeController@about']);
    Route::get('/contact',                          ['as' =>'contact',          'uses' => 'HomeController@contact']);
    Route::get('/home',                             ['as' =>'home',         'uses' => 'HomeController@home']);

Route::group(['namespace'=> 'User', 'middleware' => 'auth', 'prefix' => 'user', 'as' => 'user.'], function(){

    Route::get('/home',                         ['as' =>'home',         'uses' => 'UserController@home']);
    Route::get('/',                             ['as' => 'index',       'uses' => 'UserController@index'    ]);
    Route::get('/edit/{id}',                    ['as' => 'edit',        'uses' => 'UserController@edit'      ]);
    Route::post('/update/{id}',                 ['as' => 'update',      'uses' => 'UserController@update'  ]);


    Route::group(['namespace'=> 'Profile', 'prefix' => 'profile', 'as' => 'profile.'], function(){
        Route::get('/',                     ['as' => 'index',       'uses' => 'ProfileController@index' ]);
        Route::get('/create',               ['as' => 'create',      'uses' => 'ProfileController@create' ]);
        Route::get('/edit',                 ['as' => 'edit',        'uses' => 'ProfileController@edit'   ]);
        Route::post('/store',               ['as' => 'store',       'uses' => 'ProfileController@store' ]);
        Route::post('/{profile}/update',     ['as' => 'update',      'uses' => 'ProfileController@update' ]);

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
        Route::get('/{destine}/edit',        ['as' => 'edit',        'uses' =>  'DestineController@edit'   ]);
        Route::put('/{destine}/update',      ['as' => 'update',      'uses' =>  'DestineController@update' ]);
        Route::get('/{destine}/delete',      ['as' => 'delete',      'uses' =>  'DestineController@destroy' ]);
    });

    Route::group(['namespace'=> 'Agenda', 'prefix' => 'agenda', 'as' => 'agenda.'], function(){
        Route::get('/',                     ['as' => 'index',       'uses' =>  'AgendaController@index' ]);
        Route::get('/create',               ['as' => 'create',      'uses' =>  'AgendaController@create' ]);
        Route::post('/store',               ['as' => 'store',       'uses' =>  'AgendaController@store' ]);
        Route::get('/{agenda}/edit',         ['as' => 'edit',        'uses' =>  'AgendaController@edit'   ]);
        Route::post('/{agenda}/update',      ['as' => 'update',      'uses' =>  'AgendaController@update' ]);
        Route::get('/{agenda}/delete',       ['as' => 'delete',      'uses' =>  'AgendaController@destroy' ]);
    });

    Route::group(['namespace'=> 'Agenda', 'prefix' => 'agendaUsers', 'as' => 'agendaUsers.'], function(){
        Route::get('/',                     ['as' => 'index',       'uses' =>       'AgendaUsersController@index' ]);
        Route::get('/create',               ['as' => 'create',      'uses' =>       'AgendaUsersController@create' ]);
        Route::get('{agenda}/store',         ['as' => 'store',       'uses' =>       'AgendaUsersController@store' ]);
        Route::get('/{agenda}/show',         ['as' => 'show',        'uses' =>       'AgendaUsersController@show' ]);
        Route::get('/{agenda}/delete',       ['as' => 'delete',      'uses' =>       'AgendaUsersController@destroy' ]);
    });
    
});


Route::group(['namespace'=> 'Api', 'prefix' => 'api', 'as' => 'api.'], function(){

    Route::get('/car', ['as' =>'car',         'uses' => 'ApiCarController@index']);

});
