
<!DOCTYPE html>
<html lang="en">
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="{{ URL::asset('vendor/fontawesome-free/all.min.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/dboard.css') }}" rel="stylesheet" type="text/css" >
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
<nav class="navbar navbar-expand-md  nav-color" style="background-color: #D9B334;">
        <div class="container">
            <a class="" href="{{ url('/') }}" style="font-size:30px; color: white; margin-left:-110px; ">
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
                      <a class="nav-link" href="{{ route('welcome')}}#slide04" style="color:white;"> Contact us   </a>
                  </li>

                </ul>
            </div>
        </div>
    </nav>
  </div>

  <!-- Navbar on small screens -->



<!-- Header -->
<header class="w3-container  w3-center" style="padding:128px 16px; background-color: #D9B334;">
  <h1 class="w3-margin w3-jumbo" style="color: white;"> ABOUT US </h1>
  <p class="w3-xlarge" style="color: white;">THE INSPIRATION BEHIND WHAT WE DO</p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container" style="text-align: center;padding-left: 350px;">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>FIRST-HAND EXPERIENCE</h1>
      <h5 class="w3-padding-32"> When our founder, Daniela, went abroad during her junior year of college, she was excited. She had some money in her bank account and a whole new world out there for her to explore. However, soon, reality strook. Since she had received a chunk of money as a one-time stipend, before she knew it, she had not kept track of her funds and was running low. At the time, she wished she had some sort of structure to keep her accountable on her spending habits. That is when she had the idea to start Budget Better! </h5>

	<h5 class="w3-padding-20">
Generally, college students run out of stipend and grant money because it is just sitting in their bank account. What students do next is just compulsively buy! For example, a meal plan from an upscale college like Wellesley is $8,272. The average American College students makes $757. From both spectrums the most frugal to the least frugal will spend from $163- $367 (US Dept. Agric. Food Plans)
Despite barely making any money and still paying for a dining plan, students still eat out.
College students don’t know how to budget well!
</h5>

	<h1 class="w3-padding-32">THE SOLUTION</h1>

	<h5 class="w3-padding-1">
We are offering our customers the ability to budget your grants or stipends on the student side. Concurrently, we are offering universities an accountability medium where they see how the students are allocating grants. Are they really being used as how they proposed and intended for?


</h5>
    </div>

    {{-- <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64" aria-hidden="true" style="color: #76802F;"></i>
    </div> --}}
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding  w3-padding-64 w3-container" style="text-align: center;padding-left: 350px;">
  <div class="w3-content">

    {{-- <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64  w3-margin-right" style="color: #76802F;"></i>
    </div> --}}

    <div class="w3-twothird">
      <h1>MISSION STATEMENT</h1>
      <h5 class="w3-padding-32">We are an online platform and app with a two part step. The first part is to help students budget their stipends or grants. The second part is where the app helps their budget come to life. The students input the plan then we lock up the money and cut them a check in accordance to their budget. Our goal is twofold-- have the paycheck simulate as if they were working a regular job and to hold them accountable on the university administrative side. </h5>


    </div>
  </div>
</div>

<div class="w3-container w3-center w3-padding-64" style="background-color: #D9B334;">
    <h1 class="w3-margin w3-xlarge" style="color: white;">SIGN UP NOW!</h1>
</div>


<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
