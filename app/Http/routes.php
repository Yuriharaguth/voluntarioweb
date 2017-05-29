<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Institucional'], function () {

    Route::controller('institucional', 'InstitucionalController',
      [
          'getSobre' => 'sobre',
          'getContato' => 'contato',
          'postContato' => 'contato.send',
      ]);

});

Route::resource('volunteer', 'VolunteersController');
Route::resource('cause', 'CausesController');
Route::resource('institution', 'InstitutionsController');