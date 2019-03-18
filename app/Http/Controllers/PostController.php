<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\User;

class PostController extends Controller
{
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function createForm()
	{
		return view('post.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:1000',
			'content' => 'required'
		]);
		
		$post = Auth::user()->posts()->create($request->all());
		
		return redirect()->route('post.show', $post);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Post  $post
	 * @return \Illuminate\Http\Response
	 */
	public function show(Post $post)
	{
		return view('post.show', compact('post') );
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showByUser(User $user)
	{
		return view( 'user.posts', [
			'posts' => $user->posts()->latest()->paginate(5),
			'user' => $user
		]);
	}
}
