@extends('app')

@section('content')
<div class="row">

<div class="col-lg-2 col-centered"  style="background-color:#000000;">
   
     </div>
  <div class="col-lg-8 col-centered"  style="background-color:#ffffff;">



 <div class="panel panel-default">
    <div class="panel-body">

	<center><h1>My Blog<img src="\new-project2\resources\blogIcon.png" style="width: 50px;height:50;" class="img-rounded"</></h1>


		</div>
	</div>

	  @foreach($blogs as $key=>$blog)

 		<a href="{{ route('Blog.show', $blog->id) }}"><h1 style="color:#000000;">{{$blog->title}}</h1></a>
 		 <b>Date Posted: </b> <p>{{$blog->date}}<p>
 		
 		@endforeach

 	</div>	

<div class="col-lg-2 col-centered"  style="background-color:#000000;">
    
     </div>


</div>
 		
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
 		
