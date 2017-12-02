<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogsupercategory extends Model
{
    protected $guarded = [];
    protected $table = 'blogsupercat';

    public function categories()
    {
    	return $this->hasMany(Blogcategory::class, 'supercat_id');
    }
}
