<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $guarded = [];
	protected $table = 'blogcat';
	
    public function supercategory()
    {
    	return $this->belongsTo('App\BlogSupercategory', 'supercat_id');
    }

    public function posts(){
    	return $this->hasMany('App\Blogpost', 'category_id');
    }

    
}
