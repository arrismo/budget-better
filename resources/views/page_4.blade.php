<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Budget Better</title>
  <link rel="stylesheet" href="{{asset('css/page_4.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
  @csrf
  <div style="padding-bottom: 28px;">
    <nav class="navbar navbar-expand-md  nav-color ">
        <div class="container">
            <a class="" href="{{ url('/') }}" style="color: #fff; font-size:30px; ">
                {{ config('app.name', 'BudgetBetter') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    </div>
      <p class="text-center" style="color: white; font-size: 30px"> Enter your budget under the "Your Budget" section.  </p>
      <p class="text-center" style="color: white; font-size: 30px"> Based on the Our Suggestions column you can make adjustments to your budget.  </p>
    <div class="row">
      <div class="card shadow-lg    " style="border-radius: .60rem; background-color: lightgrey;" >
            <div class="card-header bg-transparent " style="font-family: 'Nunito', sans-serif; font-size: 30px; border-color: orange;">Our Suggestion</div>
          <div class="card-body" style="background-color: lightgrey;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-left" style="background-color: lightgrey;">Food
                  <input  placeholder={{$foodSum}}  style=" background-color:#fff; width:25%;  border: 1px solid black; border-radius: .60rem; margin-left: 170px;"    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                </li>
                <li class="list-group-item text-left" style="background-color: lightgrey;" >Rent
                  <input  placeholder={{$housingSum}} style="  background-color:#fff; width:25%; background-clip:padding-box; border: 1px solid black; border-radius: .60rem; margin-left: 174px;"    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                </li>
                <li class="list-group-item text-left" style="background-color: lightgrey;">Spending Money
                  <input  placeholder={{$spendSum}} style="
                      background-color:#fff;
                      width:25%; background-clip:padding-box;
                      border: 1px solid black;
                      border-radius: .60rem;
                      margin-left: 40px;"
                      class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                </li>
                <li class="list-group-item text-left" style="background-color: lightgrey;">Transportation
                  <input   placeholder={{$travelSum}} style="  background-color:#fff; width:25%; background-clip:padding-box; border: 1px solid black; border-radius: .60rem;  margin-left: 65px;"    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>

                </li>
                <li class="list-group-item text-left" style="background-color: lightgrey;" >Other
                  <input placeholder={{$otherSum}} style="  background-color:#fff; width:25%; background-clip:padding-box; border: 1px solid black; border-radius: .60rem; margin-left: 160px;"    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                </li>
              </ul>
          </div>
        </div>
{{-- Your changes section --}}

<form action="{{ route('dashboard') }}" method="post">
        @csrf
        <div class="card shadow-lg   bg-white " style="border-radius: .60rem;" >
            <div class="card-header bg-transparent " style="font-family: 'Nunito', sans-serif; font-size: 30px; border-color: orange; ">Your Changes</div>
          <div class="card-body ">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-left" >Food
                    <input id="food" type="number" name= "food"  min="0.00" max="10000.00" step="0.01"  placeholder="$0.00"  style=" background-color:#fff; width:25%;  border: 1px solid black; border-radius: .60rem; margin-left: 170px;"    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </li>
                <li class="list-group-item text-left" >Rent
                    <input id="rent" type="number" name= "rent" min="0.00" max="10000.00" step="0.01" placeholder="$0.00" style="  background-color:#fff; width:25%; background-clip:padding-box; border: 1px solid black; border-radius: .60rem; margin-left: 174px;"    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </li>
                <li class="list-group-item text-left">Spending Money
                    <input id="spending" name= "spending" type="number"  min="0.00" max="10000.00" step="0.01" placeholder="$0.00" style="
                      background-color:#fff;
                      width:25%; background-clip:padding-box;
                      border: 1px solid black;
                      border-radius: .60rem;
                      margin-left: 40px;
                      "
                      class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </li>
                <li class="list-group-item text-left">Transportation
                    <input id="transportation" name= "transportation" type="number" min="0.00" max="10000.00" step="0.01"  placeholder="$0.00" style="  background-color:#fff; width:25%; background-clip:padding-box; border: 1px solid black; border-radius: .60rem;  margin-left: 65px;"    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </li>
                <li class="list-group-item text-left">Other
                    <input id="other" name= "other" type="number" min="0.00" max="10000.00" step="0.01"  placeholder="$0.00" style="  background-color:#fff; width:25%; background-clip:padding-box; border: 1px solid black; border-radius: .60rem; margin-left: 160px;      "    class="inline" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </li>
              </ul>
          </div>
        </div>
      </div>
    
      <a class="btn btn-lg" style="float: left; color: #212529;background-color: #FFFFFF;border-color: #FFFFFF;" href="{{ route('page_3') }}" role="button" >Go Back</a>
       <input class="btn btn-lg"  style="float: right;color: #212529;background-color: #FFFFFF;border-color: #FFFFFF;margin-right: 10px;" type="submit" value="Continue" />
</form>
<footer class="page-footer font-small">
  <div style="color:black;" class="footer-copyright text-center py-3">© 2020 Copyright:
    BudgetBetter
  </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
