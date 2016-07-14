@extends('layout')

@section('content')
<div class="showUnit">
<h2>Er zijn op dit moment <span class="unitName">23</span> trainees actief.</h2>
</div>
<hr class="hSplit">

<script src="http://niekdew.in/traineetracker/public/js/Chart.js"></script>
<script>
    var myChart = new Chart({...})
    var lineChart = new Chart({...})

</script>




      <div class="row">


        <div class="col-md-4">


        <div class="panel panel-default statPanel">
 <div class="panel-heading">Verdeling profielen</div>
  <div class="panel-body">



        	<div class="verdelingChart" style="margin-left: -280px; float: left; width: 900px; height: 50px;">
<canvas id="myChart" height="50px"></canvas>
<script>
var ctx = document.getElementById("myChart");
var data = {
    labels: [
        "Technisch",
        "Management"
    ],
    datasets: [
        {
            data: [6, 27],
            backgroundColor: [
                "#5AB953",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#5AB953",
                "#FFCE56"
            ]
        }]
};

var options = {
    segmentShowStroke: false,
    animateRotate: true,
    animateScale: false,
    percentageInnerCutout: 50,
    tooltipTemplate: "<%= value %>%"
}

// And for a doughnut chart
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options
});
</script>

</div>
</div>
</div>


        </div>

        <div class="col-md-4">

        <div class="panel panel-default statPanel">
         <div class="panel-heading">Nestor</div>
  <div class="panel-body">

<img src="http://niekdew.in/traineetracker/public/img/trainees/bilal.jpg" class="img-circle statImg">
<h1>Bilal Taouil</h1>
</div>

</div>

        </div>

        <div class="col-md-4">
                <div class="panel panel-default statPanel">
                 <div class="panel-heading">Nieuwste aanwinst</div>
  <div class="panel-body">
<img src="http://niekdew.in/traineetracker/public/img/trainees/crapts.jpg" class="img-circle statImg">
<h1 class="statH1">Marco Crapts</h1>
</div>
</div>

        </div>


      </div>





                <div class="panel panel-default statPanel">
                 <div class="panel-heading">Uitstroom trainees</div>
  <div class="panel-body">

<div class="verdelingChart" style="height: 50px; margin-top: 0px;">
<canvas id="lineChart" height="50px"></canvas>
<script>
var ctx = document.getElementById("lineChart");

var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            backgroundColor: "#5AB953",
            borderColor: "#419243",
            borderWidth: 1,
            hoverBackgroundColor: "#71D161",
            hoverBorderColor: "#419243",
            data: [65, 59, 80, 81, 56, 55, 40],
        }
    ]
};

// And for a doughnut chart
var myDoughnutChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
         legend: {
            display: false
         }
    }
});


</script>

</div>



</div>

</div>


                <div class="panel panel-default">
                 <div class="panel-heading">Algemene statistieken</div>
  <div class="panel-body">
<b>Actieve trainees:</b> 23<br />
<b>Totale traineepopulatie:</b> 53<br />

<b>Laatste lichting:</b> 01-06-2016<br />

  </div>
  </div>







@stop
	
