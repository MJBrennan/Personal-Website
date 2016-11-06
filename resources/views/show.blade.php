@extends('app')

@section('content')

<div id="row1" class="row">

<div class="col-lg-2 col-centered" style="background-color:#000000;">
    
     </div>
  <div class="col-lg-8 col-centered" style="background-color:#ffffff;" >



 <div class="panel panel-default">
    <div class="panel-body">

<h1>{{$main->title}}</h1>
<h4 class="lead">{{$main->content}}</h4>
<b class="bold">Date Posted: {{$main->date}}</b>


			<hr>
		</div>
	</div>


	
	</div>

	<div class="col-lg-2 col-centered" style="background-color:#000000;">
    
     </div>
</div>



@stop

 @endsection


@section('scripts')

<script>
            

$(window).ready(function(){

	//console.log($("#row1").height());
	var win = $(window).height();

	if($("#row1").height() < 600){

		$("#row1").height(win);

	}

});


</script>


 @endsection