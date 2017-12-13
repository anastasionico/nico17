<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    protected $guarded = [];
    protected $table = 'blogposts';

    public function category(){
    	return $this->belongsTo('App\Blogcategory', 'category_id');
    }

	public static function getPostsPublished(){
		return $blogpostsPublished = Blogpost::where('status', '3')->orderBy('id','desc')->get();
	}    
	public static function getPostsOutstanding(){
		return $blogpostsOutstanding = Blogpost::where('status','!=', '3')->get();
	}
	
}
