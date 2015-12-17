<?php

Route::resource('/', 'ClientController');
Route::resource('client', 'ClientController');

// Login Page
Route::get('admin',function(){
	if(Auth::check()){
		return redirect('admin/dashboard');
	}else{
		return view('admin.pages.login');
	}
});

// Submit Login
Route::post('admin/loginprocess','Admins\AdminController@loginprocess');

// Logout
 Route::get('admin/logout','Admins\AdminController@logout');

// Admin Group (Backend)
Route::group([
	'prefix' => 'admin', 
 	'middleware' => ['admins','roles'],
 	'roles'=>['administrator']
], function(){
	Route::get('dashboard','Admins\AdminController@dashboard');
 });

// Manager Group (Backend)
Route::group([
	'prefix' => 'manager', 
 	'middleware' => ['admins','roles'],
 	'roles'=>['manager']
], function(){
	Route::get('dashboard','Admins\ManagerController@dashboard');
 });