@extends('layout')

@section('content')

<div class="row unitPage">

<div class="showUnit">
<h2>Alle traineeopdrachten begeleidt door <span class="unitName">{{ $supervisor->name }} </span></h2>
</div>
<hr class="hSplit">


<div class="row">

@foreach ($projects as $project)

<div class="col-md-2 traineeProfile">
<a href="{{ url('trainee', $project->trainee->id) }}">
<img src="{{ $project->trainee->img }}" class="img-circle">

<h2> {{ $project->trainee->firstname }} {{ $project->trainee->lastname }} </h2>
</a>
</div>

<div class="col-md-8 ">

<div class="panel panel-default">
  <div class="panel-heading">


Opdracht: <b>{{ $project->name }}</b>
</div>
   <div class="panel-body traineeInfo projectDesc">

        {{ $project->desc }} 

       <br /> <br /> 
        <b>Team:</b> 
       <a href="{{ url('team', $project->team_id) }} ">{{ $project->team->name }} </a>
<br />
        <b>Unit:</b> 
       <a href="{{ url('unit', $project->unit_id) }} ">{{ $project->unit->name }} </a>
<br /><br />

        <b>Startdatum:</b> {{ date("d-m-Y", strtotime($project->startDate)) }}



      </div>


</div>
</div>

</div>

@endforeach

</div>



@stop
	
