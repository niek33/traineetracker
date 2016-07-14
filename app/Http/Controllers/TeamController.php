<?php

namespace traineetracker\Http\Controllers;

use Illuminate\Http\Request;

use traineetracker\Http\Requests;
use \traineetracker\Trainee as Trainee;
use \traineetracker\Unit as Unit;
use \traineetracker\Team as Team;
use \traineetracker\Project as Project;
use \traineetracker\Supervisor as Supervisor;





class TeamController extends Controller
{
    //

    public function index() 
    {
    	$trainees = Trainee::all();
    	$units = Unit::all();
    	$teams = Team::all();




    	return view('unit.index')->with('trainees', $trainees)
    								->with('teams', $teams)
    								->with('units', $units);

    }

    public function show($id)
    {
    	
    	$team = Team::find($id);        
        $projects = $team->projects->all();

        return view('team.show') -> with('projects', $projects)
                                ->with('team', $team);
    }
}
