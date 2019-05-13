<?php

namespace App\Http\Controllers;

use App\Post;

class IndexController extends Controller
{
	public function index()
	{
		return view('index', [
			'posts' => Post::with('user')->orderByDesc('id')->paginate(5)
		]);
	}
}
