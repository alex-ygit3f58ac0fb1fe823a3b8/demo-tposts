<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\LoginPage;

use App\User;

class LoginTest extends DuskTestCase
{
	public function test_login()
	{
		$this->browse(function (Browser $browser) {
			$user = factory(User::class)->create();
			
			$browser->visit(new LoginPage)
					->type('@email', $user->email)
					->type('@password', 'secret')
					->press('@login_button')
					->assertPathIs('/home');
			$user->delete();
		});
	}
}
