<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>MJBrennan.me</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">


	<link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" />


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	 <nav class="navbar navbar-default navbar-fixed-top">
  
		<div class="container">
			<div class="navbar-header">
			
			<a class="navbar-brand"><b>MJBrennan</b></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
			<li ><a href="{{url('Home')}}"><b>Home</b></a></li>
			<li id="main"><a href="{{url('Blog')}}"><b>Blog</b></a></li>
			<li ><a href="{{url('Tweets')}}"><b>Tweets</b></a></li>
			<li ><a href="{{url('Portfolio')}}"><b>Portfolio</b></a></li>
			<li id="contact"><a href="#"><b>Contact</b></a></li>

			</ul>
			</div>
		</div>
	</nav>
	<br>
	<br>


	@if(Session::has('flash_message'))

		<div class="alert alert-success">
		{{Session::get('flash_message') }}
		</div>
		@endif


	@if (count($errors)  > 0)	

	<div class="alert alert-danger">
	Error!<br>
<ul>
	@foreach ($errors->all()  as $error)


		<h1>{{$error}}</h1>
		
	@endforeach

	</ul>

	</div>

	@endif


	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Contact</h4>
      </div>
      <div class="modal-body">

      <div class="form-group">
  		<label for="usr">Name:</label>
 		<input type="text" class="form-control" id="name">
		</div>
		<div class="form-group">
  		<label for="pwd">Email Address:</label>
 		<input type="password" class="form-control" id="address">
		</div>

      	<div class="form-group">
 		<label for="comment">Message:</label>
 		<textarea class="form-control" rows="5" id="body"></textarea>
		</div>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="send" class="btn btn-primary">Send</button>
        
      </div>
      
    </div>
  </div>
</div>

	@yield('content')


<div class="navbar navbar-default navbar-fixed-bottom" >
    <div class="container">
      <p class="navbar-text pull-left">© 2016 - Site Built By Michael Brennan
           <a href="http://tinyurl.com/tbvalid" target="_blank">HTML 5 Validation</a>
      </p>
     
    </div>
    
    
  </div>



  


	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


	<script>

	$(document).ready(function(){


		$("#contact").click(function(){

			$("#myModal").modal('show');
		

			});

		$("#send").click(function(){

		var mailText = $("#body").val();

		 $.ajax({  

		    type: "POST",
		    url: "http://localhost/MailerEx/mailerex.php",
		    data: {"body": mailText},
		    cache: false,
		    success: function(result){
		      if(result === "Mail Sent"){
		       alert("Mail Sent");
		       $("#myModal").modal('hide');

		      }else{
		        alert("Mail Not Sent Please Try Again Later");
		      }

		  	  }


			});

		 });	 
	});


	</script>

	@yield('scripts')






</body>
</html>
