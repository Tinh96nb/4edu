<?php
use  Modules\Auth\Http\Middleware\LoginMiddleware;
Route::group(['middleware' => ['web'], 'prefix' => '', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
	Route::get('register', 'RegisterController@getRegister')->name('register');

	Route::post('register', 'RegisterController@postRegister')->name('register.post');

	Route::get('activation/{token}', 'RegisterController@activateUser')->name('user.activate');

	Route::get('login', 'LoginController@getLogin')->name('login');

	Route::post('login', 'LoginController@postLogin');

	Route::get('logout', function(){
		Auth::logout();
		return redirect(route('login'));
	})->name('logout');
});
