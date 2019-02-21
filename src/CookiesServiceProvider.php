<?php

namespace Davidcb\Cookies;

use Illuminate\Support\ServiceProvider;

class CookiesServiceProvider extends ServiceProvider {

	public function boot()
	{
		$this->publishes([
			__DIR__ . '/config/cookies.php' => config_path('cookies.php'),
		]);
		$this->loadViewsFrom(__DIR__ . '/resources/views', 'cookies');
		$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
	}

	public function register()
	{
		//
	}

}