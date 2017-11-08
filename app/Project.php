<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	
	protected $guarded = [];

	public function images()
	{
		return $this->hasMany('App\ProjectImage');
	}
}








































