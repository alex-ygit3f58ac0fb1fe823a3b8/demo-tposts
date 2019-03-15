<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The attributes that are mass assignable.
	 */
	protected $fillable = ['title', 'content'];
	
	/**
	 * User Relation
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
