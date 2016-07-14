<?php

namespace traineetracker\Http\Controllers;

use Illuminate\Http\Request;

use traineetracker\Http\Requests;
use \traineetracker\Trainee as Trainee;
use \traineetracker\Unit as Unit;
use \traineetracker\Team as Team;
use \traineetracker\Supervisor as Supervisor;




class TraineeController extends Controller
{
    //

    public function index() 
    {
    	$trainees = Trainee::all();
    	$units = Unit::all();
    	$teams = Team::all();
        $supervisors = Supervisor::all();




    	return view('trainee.index')->with('trainees', $trainees)
    								->with('teams', $teams)
                                    ->with('supervisors', $supervisors)
    								->with('units', $units);

    }

    public function show($id)
    {
        $trainee = Trainee::find($id);        
        $projects = $trainee->projects()->orderBy('id', 'dec')->get();

        return view('trainee.show') -> with('projects', $projects)
                                ->with('trainee', $trainee);
    }
}
