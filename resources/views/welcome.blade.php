@extends('app')

@section('content')

	<h1>Projects</h1>

	  @foreach($projects as $key=>$project)

 		<p>{{$project->project}}<p>
 		<p>{{$project->url}}<p>
 		<p>{{$project->description}}<p>
 		


 		@endforeach


 		@endsection
 		




	
