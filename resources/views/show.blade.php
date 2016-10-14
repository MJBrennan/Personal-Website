@extends('app')

@section('content')

<div class="row">

<div class="col-lg-2 col-centered" style="background-color:#D0D0D0;">
    
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

	<div class="col-lg-2 col-centered" style="background-color:#D0D0D0;">
    
     </div>
</div>

@stop