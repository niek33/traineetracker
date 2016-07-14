@extends('layout')

@section('content')

<div class="showUnit">
<h2>Alle traineeopdrachten van <span class="unitName">{{ $trainee->firstname }} {{ $trainee->lastname }}</span></h2>
</div>

<hr class="hSplit">
<div class="row">
<div style="display:none;">{{$i=1}}</div>


<div class="row">

<div class="col-md-2 traineeProfile">
<img src="{{ $trainee->img }}" class="img-circle">

<h2> {{ $trainee->firstname }} {{ $trainee->lastname }} </h2>
<p>
@if ( $trainee->management == 0 ) 
Technisch trainee
@else 
Management trainee
@endif 
<br />
Startdatum: {{ $trainee->startDate }}
</p> 
</div>

<div class="col-md-8 ">


@foreach ($projects as $project)
<div class="panel panel-default">
  <div class="panel-heading">


Opdracht {{$i}}: <b>{{ $project->name }}</b>
</div>
   <div class="panel-body traineeInfo projectDesc">

        {{ $project->desc }} 

        <br /> <br />
        
		<b>Begeleider:</b> 
       <a href="{{ url('supervisor', $project->supervisor_id) }} ">{{ $project->supervisor->name }} </a>
<br />
<b>Team:</b> 
       <a href="{{ url('team', $project->team_id) }} ">{{ $project->team->name }} </a>
<br />

        <b>Unit:</b> 
       <a href="{{ url('unit', $project->unit_id) }} ">{{ $project->unit->name }} </a>

       <br /> <br /> 

        <b>Startdatum:</b> {{ date("d-m-Y", strtotime($project->startDate)) }}



      </div>


</div>
<div style="display:none;">
{{ $i=$i+1}}
</div>
@endforeach

</div>

</div>

@stop
	
