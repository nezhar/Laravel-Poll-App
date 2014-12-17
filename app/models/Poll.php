<?php

class Poll extends Eloquent
{
	public function answers()
	{
		return $this->hasMany('Answer', 'poll_id', 'id');
	}
}