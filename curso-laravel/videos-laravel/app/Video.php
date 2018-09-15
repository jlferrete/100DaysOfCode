<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    // Relacion One to Many
	public function comments(){
		return $this->hasMany('App\Comment');
		//hasOne es para uno a uno.
	}

	//Relacion Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}

}
