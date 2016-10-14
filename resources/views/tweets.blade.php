@extends('app')


@section('content')


    <div id="cover1" style="color:#fff; width:700px; height:700px">


      </div>
    <div class="row">

    <div class="col-lg-2 col-centered"  style="background-color:#D0D0D0;">
    
     </div>

    <div class="col-lg-8 col-centered"  style="background-color:#ffffff;">
        
    <div class="panel panel-default">
    <div class="panel-body">

    <center><h1>My Latest Tweets</h1></center>

    </div>

    </div>
  



    <div id="twitter-feed">




            </div>
     </div>

      <div class="col-lg-2 col-centered"  style="background-color:#D0D0D0;">
    
     </div>
</div>







	 @endsection


@section('scripts')

<script>

//$(window).on('load',                )

$(window).ready(function() {

   $("#cover1").show();

	
    var url = 'http://localhost/TwitterLib/twitterimpl.php';

    $.getJSON(url,function(data){
    for(var i = 0; i< data.length; i++){
          //  var tweet = data[i].text;
              var name = data[i].text;

            $("#twitter-feed").append('<p>'+name+'</p><hr>');
        }

        $("#cover1").hide();




        
    });





});


</script>


 @endsection





 	