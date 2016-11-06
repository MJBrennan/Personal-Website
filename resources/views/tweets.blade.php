@extends('app')


@section('content')


    <div id="cover1" style="color:#fff; width:700px; height:700px">


      </div>
    <div class="row">

    <div class="col-lg-2 col-centered"  style="background-color:#000000;">
    
     </div>

    <div class="col-lg-8 col-centered"  style="background-color:#ffffff;">
        
    <div class="panel panel-default">
    <div class="panel-body">

    <center><h1>My Latest Tweets   <img src="\new-project2\resources\twitter.jpg" style="width: 50px;height:50;" class="img-rounded"</></h1>

   <h4> Screen Name: Mike90901 &ensp; &ensp; &ensp; Date Joined: June 2010 </h4> 

    </center>
    </div>
    </div>
   
<div id="tweets" class="list-group">


</div>


     </div>

      <div class="col-lg-2 col-centered"  style="background-color:#000000;">
      
      
    
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
              var id  =  data[i].id_str;

            $("#tweets").append('<a href="https://twitter.com/mike90901/status/'+ id +'" class="list-group-item list-group-item-action">' + name +' ');
        }

        $("#cover1").hide(); 
        console.log(id);
    });
});


</script>


 @endsection





 	