<?php

Route::group(['middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{

	Route::get('', function() {
		return view('admin::dashboard');
	});

	Route::prefix('user')->group(function () {
		Route::get('', 'AdminUserController@index')->name('list.user');
		Route::get('/remove/{id}', 'AdminUserController@remove')->name('user.remove');
		Route::get('/update/{id?}', 'AdminUserController@update')->name('user.update');
		Route::post('/saveuser'	 , 'AdminUserController@saveuser')->name('user.save');
	});

});
