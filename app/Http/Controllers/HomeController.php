<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('home');
	}
	
	/**
	 * Save User profile data
	 */
	public function save(Request $request)
	{
		$this->validate($request, [
			'name' => 'max:30'
		]);
		
		$user = auth()->user();
		$user->name = $request->input('name') ?? '';
		$user->save();
		
		return redirect()->route('home');
	}
}
