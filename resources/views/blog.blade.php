@extends('app')

@section('content')

 	
	<h1>Projects</h1>

	  @foreach($blogs as $key=>$blog)

 		<h2>{{$blog->title}}</h2>
 		<p>{{$blog->content}}<p>
 		<p>{{$blog->date}}<p>

 		@endforeach


 		@endsection
 		
