<?php

Route::group(['middleware' => ['web','auth'], 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function(){
	Route::get('/settings','UserController@index')->name('user.update');
});
