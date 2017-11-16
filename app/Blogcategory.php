<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $guarded = [];

    public function supercategory()
    {
    	return $this->belongsTo('App\BlogSupercategory');
    }

    
}
