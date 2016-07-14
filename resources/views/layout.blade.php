<!DOCTYPE html>
<html>
    <head>
        <title>TraineeTracker v0.1</title>

        {!! Html::style('css/app.css') !!}

        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" />

<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<link rel="icon" type="image/png" href="https://www.kpn.com/public/images/favicon/favicon-32x32.png" sizes="32x32">




        <style>
		body { padding-top: 60px; }
		@media (max-width: 979px) {
			body { padding-top: 0px; }
		}
        </style>

        <script>
                $(document).ready(function() {
          $('#example').dataTable( {
            "language": {
                "url": "http://niekdew.in/traineetracker/public/js/dutch.lang"
            }
        } );

          oTable = $('#example').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#myInputTextField').keyup(function(){
      oTable.search($(this).val()).draw() ;
})


        });
        </script>
    </head>

    <nav class="navbar navbar-fixed-top menuBalk">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/')}}">Overzicht</a></li>
                    <li><a href="{{ url('/statistieken') }}">Statistieken</a></li>
                    <li><a href="#">Mijn profiel</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>



    <body>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="header">
    <div class="jumbotron">
      <div class="container">

          <div class="logo">

          <a href="{{ url('/') }}">
          <img src="{{url('img/logo.jpg')}}">
          </a>
          </div>

<div class="input-group searchBar">
            <input type="text" class="form-control" placeholder="Zoek een trainee.." name="srch-term" id="myInputTextField">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
      </div>
      </div>
    </div>
        <div class="container">
            @yield('content')
        </div><!-- /.container -->

</div>
            <div class=" footer" style="margin-top: 40px; margin-bottom: 0px;">
<hr class="hSplit">
<p>
TraineeTracker 2016 &nbsp; | &nbsp; KPN Business Operations &nbsp; | &nbsp; Skills & Development &nbsp; | &nbsp; <a href="mailto:niek.dewin@kpn.com">Contact</a>     </p>
          <img src="{{url('img/kpnlogo.png')}}" height="40">
      
            </div>
    </body>
</html>
	
