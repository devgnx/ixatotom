<?php

Route::group([
    'as' => 'admin::',
    'prefix' => 'admin'
], function() {
    Route::get('login', [
        'as' => 'login',
        'uses' => 'AdminController@login'
    ]);

    Route::post('login', [
        'as' => 'auth',
        'uses' => 'AdminController@auth'
    ]);

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', [
            'as' => 'home',
            'uses' => 'AboutController@edit'
        ]);

        Route::get('sobre', [
            'as' => 'about',
            'uses' => 'AboutController@edit'
        ]);

        Route::get('servicos', [
            'as' => 'services',
            'uses' => 'ServicesController@index'
        ]);

        Route::get('servico/novo', [
            'as' => 'serviceCreate',
            'uses' => 'ServicesController@create'
        ]);

        Route::get('servico/{id}', [
            'as' => 'serviceEdit',
            'uses' => 'ServicesController@edit'
        ]);

        Route::get('servico/remover/{id}', [
            'as' => 'serviceDelete',
            'uses' => 'ServicesController@delete'
        ]);

        Route::get('contato', [
            'as' => 'contact',
            'uses' => 'ContactController@edit'
        ]);
    });
});
