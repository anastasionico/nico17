<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static function getInboxOutstanding(){
		return $inboxOutstanding = Contact::where('seen', null)->count();
	}    
}
