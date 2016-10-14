@extends('app')

@section('content')



<form name="form1" role="form" method="POST" action="{{url('/info')}}">
<input type="hidden" name="_token" value="{{ csrf_token()}}">


Title:<br>
<input type="text" name="title" value="{{old('title')}}"  /><br>
Content:<br>
<textarea type="text" class="form-control" name="content" value="{{old('content')}}"  /></textarea><br>
Date:<br>
<input type="text" name="date" value="{{old('date')}}"  /><br>
<button  type="submit"  value="Submit"/>

</form>



@endsection