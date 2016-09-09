@extends('app')


@section('content')
	
	<h1>Tweets</h1>





    <div id="twitter-feed">




        </div>






	 @endsection


@section('scripts')

<script>



$(document).ready(function() {

	
    var url = 'http://localhost/TwitterLib/twitterimpl.php';

    $.getJSON(url,function(data){
    for(var i = 0; i< data.length; i++){
          //  var tweet = data[i].text;
              var name = data[i].text;

            $("#twitter-feed").append('<p>'+name+'</p><hr>');


        }
    });





});


</script>


 @endsection





 	