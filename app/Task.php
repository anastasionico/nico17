<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $guarded = [];

	public static function getAll(){
		$tasksCountTotal = Task::count();
		$tasksCountUndone = Task::where('done', 1)->count();
		return $tasksCount = array(
			'total' => $tasksCountTotal, 
			'undone' => $tasksCountUndone,
		);
	}
}
