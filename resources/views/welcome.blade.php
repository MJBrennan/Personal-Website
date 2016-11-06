@extends('app')

@section('content')

<div class="row">

<div class="col-lg-2 col-centered" style="background-color:#000000;">
    
     </div>
  <div class="col-lg-8 col-centered" style="background-color:#FFFFFF;">

<div class="panel panel-default">

	<div class="panel-body">


	<center><h1>Personal Projects&ensp;<img src="\new-project2\resources\porticon.png" style="width: 50px;height:50;" class="img-rounded"></h1>

		</div>
	</div>	


	<div class="panel panel-default">

	<div class="panel-body">



	  @foreach($projects as $key=>$project)

 	 <div class="panel-header">	<center><p><b>Project Title: </b><br><h4>{{$project->project}}</h4><p></p></center></div><hr>
 		<center><p><b>Project URL: </b><br><a href="{{$project->url}}">{{$project->url}}</a></center><hr>
 		<center><p><b>Project Description: </b><br>{{$project->description}}<p></center><hr>
 		<center><p><b>Project Image: </b><br><img src="{{$project->image}}" width="300" height="300"></img></p></center><hr>
 		
 		@endforeach

 		</div>


 		 	</div>	

 

</div>

		<div class="col-lg-2 col-centered" style="background-color:#000000;">
    
     </div>

     </div>


 		@endsection
 		




	
