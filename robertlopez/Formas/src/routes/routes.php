<?php

Route::get('test', function(){
	return view('Formas::formas');
});
Route::any('resp', ['as'=>'resp', 'uses'=>'robertlopez\Formas\FormasController@test']);
Route::get('formas', 'robertlopez\Formas\FormasController@index');

