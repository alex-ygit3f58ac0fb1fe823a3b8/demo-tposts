<?php

namespace Tests\Feature;

use Tests\TestCase;

class PostTest extends TestCase
{
	public function test_go_to_login_when_open_new_post_form_unauthorized()
	{
		$response = $this->get('/post/new');
		$response->assertLocation('/login');
	}
}
