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
            'as' => 'about:edit',
            'uses' => 'AboutController@edit'
        ]);

        Route::post('sobre', [
            'as' => 'about:save',
            'uses' => 'AboutController@save'
        ]);

        Route::get('servicos', [
            'as' => 'service:list',
            'uses' => 'ServicesController@index'
        ]);

        Route::get('servico/novo', [
            'as' => 'service:create',
            'uses' => 'ServicesController@create'
        ]);

        Route::get('servico/{id}', [
            'as' => 'service:edit',
            'uses' => 'ServicesController@edit'
        ]);

        Route::post('servico/salvar/{id?}', [
            'as' => 'service:save',
            'uses' => 'ServicesController@save'
        ]);

        Route::get('servico/remover/{id}', [
            'as' => 'service:delete',
            'uses' => 'ServicesController@delete'
        ]);

        Route::get('contato', [
            'as' => 'contact:edit',
            'uses' => 'ContactController@edit'
        ]);

        Route::post('contato', [
            'as' => 'contact:save',
            'uses' => 'ContactController@save'
        ]);
    });
});
