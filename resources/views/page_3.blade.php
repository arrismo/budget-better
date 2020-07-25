<!DOCTYPE html>
<html>
<head>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Budget Better</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('css/page_3.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">




</head>
<body >
	@csrf

    <div class='fullscreenDiv'>
       <div class="center"> <h3 style="font-family: 'Nunito', sans-serif; font-size: 70px; margin-bottom:160px;"> Now you will prepare your budget!</h3></div>


    

    </div>


    <div class="wrapper">
    	
    	

    	 <a class="btn btn-lg"  href="{{ route('signup') }}" role="button" >Go Back</a>



    	<a class="btn btn-lg"  href="{{ route('page_4') }}" role="button" >Continue</a>

      <!--   <button type="button" class="btn btn-light btn-lg" href="{{ route('page_4') }}" >Continue </button>
          -->

    </div> 



</body>
</html> 