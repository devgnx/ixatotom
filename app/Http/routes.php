<?php

require_once("Routes/admin.php");

Route::get('/', function() {
    return view("home");
});


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
