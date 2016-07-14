@extends('layout')

@section('content')
<div class="row unitPage">

<div class="showUnit">
<h2>Alle traineeopdrachten binnen <span class="unitName">{{ $team->name }} </span></h2>
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
       <b>Begeleider:</b> 
       <a href="{{ url('supervisor', $project->supervisor_id) }} ">{{ $project->supervisor->name }} </a>
<br />
       
        <b>Startdatum:</b> {{ date("d-m-Y", strtotime($project->startDate)) }}



      </div>


</div>
</div>

</div>

@endforeach



</div>

@stop
	
