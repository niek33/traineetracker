<?php

namespace traineetracker;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function projects()
	{
	    return $this->hasMany('\traineetracker\Project');
	}

}
