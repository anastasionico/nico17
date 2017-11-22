<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogsupercategory extends Model
{
    protected $guarded = [];
    protected $table = 'blogsupercategories';

    public function categories()
    {
    	return $this->hasMany(Blogcategory::class, 'supercategory_id');
    }
}
