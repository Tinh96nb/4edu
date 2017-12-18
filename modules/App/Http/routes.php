<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\App\Http\Controllers'], function()
{
    Route::get('/', 'AppController@index')->name('home');
    Route::get('profile/{id}', 'AppController@profile')->name('profile');

    Route::get('mail', function() {
        return view('app::mail');
    });
    Route::post('/message/send', ['uses' => 'AppController@addFeedback', 'as' => 'front.fb']);
});
