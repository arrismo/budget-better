<!DOCTYPE html>
<html lang="en">

<html>
<head>
	<title>Budget Better</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="{{ URL::asset('vendor/fontawesome-free/all.min.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/dboard.css') }}" rel="stylesheet" type="text/css" >

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-expand-md  nav-color" style="background-color: #D9B334;">
        <div class="container">
            <a class="" href="{{ url('/') }}" style="font-size:30px; color: white; margin-left:-120px; ">
                {{ config('app.name', 'BudgetBetter') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" >
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('welcome')}}" style="color:white;"> Home  </a>
                  </li>


                  <!-- <li class="nav-item"> 
                      <a class="nav-link" href="{{ route('welcome')}}#slide03" style="color:white;"> Contact us   </a>
                  </li> -->
                  
                  <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('aboutus')}}" style="color:white;">
                      About us 
                    </a>
                    </li>
               
                    <!-- Authentication Links -->
                        <li class="nav-item dropdown"> 
                            <a id="navbarDropdown" style="color:white;" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Welcome  {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>


                      

                </ul>
            </div>
        </div>
    </nav>




<!-- <h1 style="margin-left: 58px; color: black; margin-top: 20px;" > My Dashboard 
<a class="btn btn-lg"  style="display: inline-block; margin-left:1020px; color: #040502; background-color: #768130;
border-color: #FFFFFF;"  href="{{ route('page_4') }}" role="button" >Edit</a> </h1> -->

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>{{ Auth::user()->name }}</strong></span><br>
      <a href="{{ route('welcome')}}#slide03" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Geo</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>



<!-- <div class="row" style="padding-left:60px; padding-right: 20px; text-align: center;">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2" style="border-left: .25rem solid #76802F !important;">
              	
              </style>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-lg font-weight-bold  text-uppercase mb-1" style="color:black;">Food
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-cutlery" aria-hidden="true"></i>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2" style="border-left: .25rem solid #76802F !important;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-lg font-weight-bold  text-uppercase mb-1" style="color:black;">Rent</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$200</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2" style="border-left: .25rem solid #76802F !important;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-lg font-weight-bold  text-uppercase mb-1" style="color:black;">Spending Money</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$200</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card  shadow h-100 py-2" style="border-left: .25rem solid #76802F !important;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-lg font-weight-bold  text-uppercase mb-1" style="color:black;">Transportation</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$50</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




</div>


<div class="row"  style="text-align: center;">
    	<div class="col-sm-4" style="margin-left: 60px;">
    		<div class="card shadow">
            	<div class="card-header py-3" style="background-color: #76802F;">
                  <h6 class="m-0 font-weight-bold" style="color:black;"></em>Resources</h6>
                </div>
                <div class="card-body">
                  <p> </p>
                </div>
             </div>
        </div>


        <div class="col-sm-4" style="margin-left: 571px;">
        	
        </style>
        	<div class="card shadow">
                <div class="card-header py-3" style="background-color: #76802F;">
                  <h6 class="m-0 font-weight-bold " style="color:black;">Your Info</h6>
                </div>
                <div class="card-body">
                  <p> </p>
        </div>
	</div>
</div>

</div> -->


<div style="color:black; text-align:center" class="footer-copyright text-center py-3">© 2020 Copyright:
      BudgetBetter
</div>




</body>
</html>