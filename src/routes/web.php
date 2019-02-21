<?php

Route::group(['namespace' => 'Davidcb\Cookies\Http\Controllers'], function() {
	Route::get('setLegalCookie', 'CookiesController@setLegalCookie')->name('setLegalCookie');
});