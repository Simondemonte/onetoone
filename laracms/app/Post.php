<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	public $directory ='/images/';
	protected $fillable =[
	'title',
	'content',
	'path',
	];
	
	public function tags(){
		return $this->morphToMany('App\Tag', 'taggable');
	}
	public static function scopeLatest($query){
		//Format nama function -->scope + MAUNGAPAIN
		// Scope +latest (mau menampilkan latest post)
		
		return $query->orderBy('id', 'desc')->get();
	}
	public function getPathAttribute($value){
		return $this->directory . $value;
	}
}
