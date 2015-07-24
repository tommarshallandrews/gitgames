<?php

// app/models/Game.php

class Game extends Eloquent
{

	public function user()
	{
		return $this->belongsTo('User');
	}

	public static $rules = [
	'title' => 'required',
	'publisher' => 'required',
	'user_id' => 'required'
	];

}
