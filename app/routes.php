<?php

Route::get('/', function()
{
	return Redirect::route('siswa.index');
});

Route::get('/siswa', [
	'as' 	=> 'siswa.index',
	'uses' 	=> 'SiswaController@index'
]);

Route::get('/siswa/create', [
	'as' 	=> 'siswa.create',
	'uses' 	=> 'SiswaController@create'
]);

Route::post('/siswa', [
	'as' 	=> 'siswa.store',
	'uses' 	=> 'SiswaController@store'
]);

Route::get('/siswa/{id}', [
	'as' 	=> 'siswa.show',
	'uses' 	=> 'SiswaController@show'
]);

Route::get('/siswa/{id}/edit', [
	'as' 	=> 'siswa.edit',
	'uses' 	=> 'SiswaController@edit'
]);

Route::put('/siswa/{id}', [
	'as' 	=> 'siswa.update',
	'uses' 	=> 'SiswaController@update'
]);

Route::delete('/siswa/{id}', [
	'as' 	=> 'siswa.destroy',
	'uses' 	=> 'SiswaController@destroy'
]);

