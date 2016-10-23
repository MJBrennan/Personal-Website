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
   
<div id="tweets" class="list-group">


</div>


     </div>

      <div class="col-lg-2 col-centered"  style="background-color:#D0D0D0;">
      
    
     </div>


	 @endsection


@section('scripts')

<script>
            

$(window).ready(function() {

    var url = 'http://localhost/new-project2/app/Classes/TwitterClass.php';

      $.ajaxSetup({
      headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
       });

    $.getJSON(url,function(data){
    for(var i = 0; i< data.length; i++){
          //  var tweet = data[i].text;
              var name = data[i].text;
              var date = data[i].created_at;
              var url  =  data[i].urls;

            $("#tweets").append('<a href="'+ url +'" class="list-group-item list-group-item-action">' + name +'</a>');
        }

        $("#cover1").hide(); 
    });
});


</script>


 @endsection





 	