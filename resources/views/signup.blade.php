<!DOCTYPE html>
<html>
<!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>

<link href="{{ URL::asset('vendor/fontawesome-free/all.min.css') }}" rel="stylesheet" type="text/css" >

<link href="{{ URL::asset('css/dboard.css') }}" rel="stylesheet" type="text/css" >

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
    <title>Sign-Up</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <style>
      body {
        /* background: #f12711; 
        background: -webkit-linear-gradient(to right,#f5af19,#f12711); 
        background: linear-gradient(to right,#f5af19,#f12711);  */
      }
      html, body {
      min-height: 100%;
      }
      body, div, form, input, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family:Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
      font-size: 16px;
      color: #fff;
      line-height: 22px;
      
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      text-align:center;
      height: inherit;
      padding: 60px;
      
      }
      form {
      width: 38%;
      padding: 20px;
      padding-bottom:40px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 10px 0 #774a03; 
      background: linear-gradient(to bottom, #F9D423, #e65c00);
      }
      .banner {
      position: relative;
      padding-top: 40px;
      height: 30px;
      background-image: url("/uploads/media/default/0001/01/f1cf9a9068f4bfbdbd9758c45db79203579a3561.jpeg");      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    
      }
      .banner::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      text-align:center;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      text-align:center;
      }
      .item:hover p, input:hover::placeholder {
      color: #774a03;
      }
      .item input:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #774a03;
      color: #774a03;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #818b34;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      
      }
      button:hover {
      background: #f5ab1b;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .contact-item .item {
      width: calc(50% - 8px);
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item input {
      width: calc(100% - 12px);
      } }

      input[type="date" i] {
        align-items: center;
        display: -webkit-inline-flex;
        font-family: monospace;
        padding-inline-start: 1px;
        cursor: default;
        overflow: hidden;
        padding: 0px;
      }

      input {
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark-color(black, white);
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        -webkit-appearance: textfield;
        background-color: -internal-light-dark-color(rgb(255, 255, 255), rgb(59, 59, 59));
        -webkit-rtl-ordering: logical;
        cursor: text;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 2px;
        border-width: 2px;
        border-style: inset;
        border-color: -internal-light-dark-color(rgb(118, 118, 118), rgb(195, 195, 195));
        border-image: initial;
      }
    </style>

  <body>
    <div class="testbox">
      <form  action="{{ route('page_4') }}" method="post">
      @csrf
        <div class="banner">
          <h1>Sign-Up</h1>
        </div>
        <br><br>
        <p>What experience are you budgeting for?</p>
        <select style="width:200px;" name="experience" id="experience" required>
          <option value="">Select Experience</option>
          <option value="1">Study Abroad</option>
          <option value="2">Internship</option>
          <option value="3">Semester</option>
        </select>
        <br><br>


        <div  data-validate = "Location">
        <p>What location will you be in?</p>
        <select name="country" class="countries" id="countryId">
            <option value="">Select Country</option>
        </select>
        <br>
        <select name="state" class="states" id="stateId">
            <option value="">Select State</option>
        </select>
        <br>
        <select name="cityId" class="cities" id="cityId">
            <option value="">Select City</option>
        </select>
        
        <br>
        <br>
        <div>
          <p>Your program start date</p>
          <input style="width:200px;" type="date" required></input>
        </div>
        <br>
        <div>
          <p>Your program end date</p>
          <input style="width:200px;" type="date" required></input>
        </div>
        <br><br>
        <div class="btn-block">
          <button type="submit" >SUBMIT</button>
        </div>

      </form>
    </div>
</body>
<!-- Copyright -->
<!-- <div style="color:black;text-align:center" class="footer-copyright text-center py-3">© 2020 Copyright:
      BudgetBetter
</div> -->
    <!-- Copyright -->
</html>

