<?php

require_once("Routes/admin.php");

Route::get('/', ['as' => "home", 'uses' => "HomeController@index"]);

Route::get('servicos/', [
    'as' => "services",
    function() {
        return view('services');
    }
]);

Route::get('contato/', [
    'as' => "contact",
    function() {
        return view('contato');
    }
]);

Route::post('contato/enviar', [
    'as' => "contact:send",
    'uses' => "HomeController@sendMail"
]);
