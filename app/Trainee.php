<?php

namespace traineetracker;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
	public function projects()
    {
        return $this->hasMany('\traineetracker\Project');
    }
    //
}
