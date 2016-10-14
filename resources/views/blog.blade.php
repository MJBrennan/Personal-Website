@extends('app')

@section('content')
<div class="row">

<div class="col-lg-2 col-centered"  style="background-color:#D0D0D0;">
    
     </div>
  <div class="col-lg-8 col-centered"  style="background-color:#ffffff;">



 <div class="panel panel-default">
    <div class="panel-body">

	<center><h1>My Blog</h1></center>


		</div>
	</div>

	  @foreach($blogs as $key=>$blog)

 		<a href="{{ route('Blog.show', $blog->id) }}"><h1>{{$blog->title}}</h1></a>
 		<p>{{$blog->content}}<p>
 		<p>{{$blog->date}}<p>
 		
 		@endforeach

 	</div>	

<div class="col-lg-2 col-centered"  style="background-color:#D0D0D0;">
    
     </div>


</div>
 		@endsection


 		@section('footer')


 		@endsection
 		
