@extends('app')

@section('content')

<div class="row">

<div class="col-lg-2 col-centered" style="background-color:#D0D0D0;">
    
     </div>
  <div class="col-lg-8 col-centered" style="background-color:#FFFFFF;">

<div class="panel panel-default">

	<div class="panel-body">


	<center><h1>Personal Projects</h1></center>

		</div>
	</div>	


	<div class="panel panel-default">

	<div class="panel-body">



	  @foreach($projects as $key=>$project)

 	<div class="panel-header">	<p><b>Project Title: </b><br>{{$project->project}}<p></div><hr>
 		<p><b>Project URL: </b><br>{{$project->url}}<p><hr>
 		<p><b>Project Description: </b><br>{{$project->description}}<p><hr>
 		


 		@endforeach

 		</div>


 		 	</div>	

 

</div>

		<div class="col-lg-2 col-centered" style="background-color:#D0D0D0;">
    
     </div>

     </div>


 		@endsection
 		




	
