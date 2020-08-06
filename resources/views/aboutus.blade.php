@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<!-- <div class="w3-top">
  <div class="w3-bar  w3-card w3-left-align w3-large" style="background-color: white;">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{route('welcome') }}" class="w3-bar-item w3-button w3-padding-large w3-white">Go Back</a>
  </div> -->

  <!-- Navbar on small screens -->
  


<!-- Header -->
<header class="w3-container  w3-center" style="padding:128px 16px; background-color: #D9B334;">
  <h1 class="w3-margin w3-jumbo" style="color: white;"> ABOUT US </h1>
  <p class="w3-xlarge" style="color: white;">THE INSPIRATION BEHIND WHAT WE DO</p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
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

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64" style="color: #76802F;"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding  w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64  w3-margin-right" style="color: #76802F;"></i>
    </div>

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
