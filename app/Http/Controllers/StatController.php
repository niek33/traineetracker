<?php

namespace traineetracker\Http\Controllers;

use Illuminate\Http\Request;

use traineetracker\Http\Requests;
use \traineetracker\Trainee as Trainee;
use \traineetracker\Unit as Unit;
use \traineetracker\Team as Team;
use \traineetracker\Project as Project;
use \traineetracker\Supervisor as Supervisor;





class StatController extends Controller
{
    //

    public function index() 
    {
        return view('stat.index');

    }

}
