<?php

/**
 *  Use Arcanedev\NoCaptcha Package
 */

namespace App\Support\Captcha;

use Arcanedev\NoCaptcha\Contracts\NoCaptcha as ArcanedevNoCaptcha;
use Arcanedev\NoCaptcha\Rules\CaptchaRule as ArcanedevCaptchaRule;

class CaptchaReCaptchaV2 implements CaptchaInterface {
	
	const HTML_ATTRIBUTE_NAME = 'g-recaptcha-response';
	
	/**
	 * Get service provider from container
	 */
	private function getCaptchaProvider()
	{
		return app(ArcanedevNoCaptcha::class);
	}

	public function getScript() 
	{
		return $this->getCaptchaProvider()->script();
	}
	
	public function getHtmlView()
	{
		return $this->getCaptchaProvider()->display();
	}
	
	public function getHtmlAttributeName() 
	{
		return self::HTML_ATTRIBUTE_NAME;
	}
	
	public function getValidationRulesArray()
	{
		return ['required', new ArcanedevCaptchaRule];
	}
}