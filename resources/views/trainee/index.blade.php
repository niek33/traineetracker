@extends('layout')

@section('content')

<div class="row">





  <table id="example" class="table table-striped table-bordered traineeTable" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th></th>
        <th>Naam</th>

        <th>Business unit</th>
        <th>Team</th>
        <th width="5%">Opdr.</th>        

        <th >Voortgang opdracht</th>

        <th width="6%">Einddatum</th>

        <th>Begeleider</th>

        <th width="6%">Profiel</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($trainees as $trainee)
      <tr>
        <td>


        <img src="{{ $trainee->img }}" alt="..." width="50" height="50" class="img-circle thumbImg">

</td>


        <td><a href="{{ url('trainee', $trainee->id) }} ">{{ $trainee->firstname }} {{ $trainee->lastname }}</a></td>

     <td><a href="{{ url('unit', $units->find($trainee->projects->last()['unit_id'])['id'] ) }}">{{ $units->find($trainee->projects->last()['unit_id'])['name'] }}</a></td>

       <td><a href="{{ url('team', $trainee->projects->last()['team_id']) }} ">{{ $teams->find($trainee->projects->last()['team'])['name'] }}</a></td>


                <td class="centerCell">{{ $trainee->projects->count() }}</td>


        <td>


          <div class="progress">
  <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="{{ (1-round(((round(abs(strtotime($trainee->projects->last()['endDate'])-strtotime('now'))/86400))/180), 1))*100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ (1-round(((round(abs(strtotime($trainee->projects->last()['endDate'])-strtotime('now'))/86400))/180), 1))*100 }}%">
    <span class="sr-only">{{ (1-round(((round(abs(strtotime($trainee->projects->last()['endDate'])-strtotime('now'))/86400))/180), 1))*100 }}% Complete (success)</span>  

{{ (1-round(((round(abs(strtotime($trainee->projects->last()['endDate'])-strtotime('now'))/86400))/180), 1))*100 }}%
  </div>
  
</div>

        </td>

        <td class="centerCell">{{ date("d-m-Y", strtotime($trainee->projects->last()['endDate'])) }}</td>
                


        <td><a href="{{ url('supervisor', $trainee->projects->last()['supervisor_id']) }} ">{{ $supervisors->find($trainee->projects->last()['supervisor_id'])['name'] }}</a></td>
        <td>

        @if ($trainee->management == 1)
	Management
        @else

	Technisch
        @endif
        </td>
      </tr>
    @endforeach

    </tbody>
  </table>

</div>
</div>

@stop
	
