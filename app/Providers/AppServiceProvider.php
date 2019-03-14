<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Support\Captcha;

class AppServiceProvider extends ServiceProvider
{	
	/**
	 * All of the container bindings that should be registered.
	 */
	public $bindings = [
		Captcha\CaptchaInterface::class => Captcha\CaptchaReCaptchaV2::class
	];

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
