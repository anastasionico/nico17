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

    
}
