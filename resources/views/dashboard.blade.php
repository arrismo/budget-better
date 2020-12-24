<!DOCTYPE html>
<html lang="en">

<html>

<head>
	<title>Budget Better</title>
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>


<!-- <link href="{{ URL::asset('vendor/fontawesome-free/all.min.css') }}" rel="stylesheet" type="text/css" > -->
<link href="{{ URL::asset('css/dboard.css') }}" rel="stylesheet" type="text/css" >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


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


                  <li class="nav-item"> 
                      <a class="nav-link" href="{{ route('welcome')}}#slide03" style="color:white;"> Contact us   </a>
                  </li>
                  
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


<div class="w3-main" style="margin-left:300px;margin-top:3px;">

  <!-- Header -->

  <header class="w3-container" style="padding-top:22px" id="overview"> 
    <h5><b> My Dashboard</b></h5>
  </header>

  

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">

           <h3>{{$budget->food}} </h3>

        </div>
        <div class="w3-clear"></div>
        <h4 >Food</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
           <h3>{{$budget->rent}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Rent</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$budget->spending}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Spending Money</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
           <h3>{{$budget->transportation}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Transportation</h4>
      </div>
    </div>
  </div>
@endforeach
  

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px" id="info">
    
      <div class="w3-twothird">
        <h5>Your Info</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Name: Jane Doe</td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Type: Internship</td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>Country: USA</td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>Program starts: June 1, 2020</td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Program ends: August 30, 2020</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container" id="general">
    <h5>General Stats</h5>
    <p>Food</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:35%">35%</div>
    </div>

    <p>Rent</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Transportation</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:5%">15%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Resources</h5>
    <br>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
      <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Boston Sites<span class="w3-opacity w3-medium"></span></h4>
        <a href="https://www.tripadvisor.com/ShowTopic-g60745-i48-k7333669-Boston_1_week_Budget-Boston_Massachusetts.html">https://www.tripadvisor.com/ShowTopic-g60745-i48-k7333669-Boston_1_week_Budget-Boston_Massachusetts.html</a><br>
      </div>
    </div>
    <br>
    <br>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
      <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Food and markets <span class="w3-opacity w3-medium"></span></h4>
        <a href="https://smartasset.com/mortgage/the-cost-of-living-in-boston#:~:text=If%20your%20budget%20is%20tight,food%20in%20Boston%20is%20pricey.">https://smartasset.com/mortgage/the-cost-of-living-in-boston#:~:text=If%20your%20budget%20is%20tight,food%20in%20Boston%20is%20pricey.</a><br>
      </div>
    </div>
  </div>
  <br>
  
  </div>


<div style="color:black; text-align:center" class="footer-copyright text-center py-3">© 2020 Copyright:
      BudgetBetter
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    


</body>
</html>