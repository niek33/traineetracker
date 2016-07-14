<?php

namespace traineetracker;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function trainee()
	{
	    return $this->belongsTo('\traineetracker\Trainee');
	}

	public function team()
	{
	    return $this->belongsTo('\traineetracker\Team');
	}

	public function supervisor()
	{
	    return $this->belongsTo('\traineetracker\Supervisor');
	}





	public function unit()
    {
        return $this->belongsTo('\traineetracker\Unit');
    }

}
