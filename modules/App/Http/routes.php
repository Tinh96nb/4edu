<?php

Route::group(['middleware' => 'web', 'prefix' => 'app', 'namespace' => 'Modules\App\Http\Controllers'], function()
{
    Route::get('/', 'AppController@index');
    Route::get('mail', function() {
        return view('app::mail');
    });
    Route::post('/message/send', ['uses' => 'AppController@addFeedback', 'as' => 'front.fb']);
});
