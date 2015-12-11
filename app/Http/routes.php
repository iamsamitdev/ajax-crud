<?php

Route::resource('/', 'ClientController');
Route::resource('client', 'ClientController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
