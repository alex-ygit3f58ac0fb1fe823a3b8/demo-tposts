<?php

namespace App\Support\Captcha;

interface CaptchaInterface {
	
	/**
	 * Get JS script string
	 * Put to html head/footer
	 */
	public function getScript();
	
	/**
	 * Get captcha HTML
	 */
	public function getHtmlView();
	
	/**
	 * Get html attribute name :)
	 */
	public function getHtmlAttributeName();
	
	/**
	 * Get array of rules for request validation
	 */
	public function getValidationRulesArray();
}