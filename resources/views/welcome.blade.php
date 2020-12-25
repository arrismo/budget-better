<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
    <meta name="author" content="">

        <title>Budget Better</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
            <link rel="stylesheet" href="{{asset('css/fullpage.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">

        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    </head>
    <body>
        <script>0</script>
        <script src="{{asset('js/jquery.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/fullpage.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/scrolloverflow.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/jquery.inview.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/form.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/custom.js')}}" type="text/javascript" ></script>







        <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo" >
                        Budget Better

                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01"><strong>Home</strong></a></li>

                                   <li>
                                    @if (Auth::guest())
                                    <a href="{{ route('login')}}"><strong>Login </strong></a>
                                    @else
                                    <a href="{{ route('dashboard')}}"><strong> My Dashboard </strong></a>

                                    @endif

                                   </li>

                                    <li>
                                        @if (Auth::guest())
                                        <a href="{{ route('register')}}"><strong>Sign Up </strong></a>
                                        @endif
                                    </li>

                                    <li data-menuanchor="slide02"><a href="#slide02"><strong>Services</strong></a></li>
                                    <li data-menuanchor="slide03"><a href="{{ route('aboutus')}}"><strong>About Us</strong></a></li> -->
                                  <!--  <li data-menuanchor="slide04"><a href="#slide04"><strong>Testimonials</strong></a></li> -->
                                    <li data-menuanchor="slide03"><a href="#slide03"><strong>Contact Us</strong></a></li>




                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
          <source src="images/video.mp4" type="video/mp4">
        </video>


        <div id="fullpage" class="fullpage-default">

            <div class="section animated-row" data-section="slide01">
                <div class="section-inner">
                    <div class="welcome-box">
                        <span class="welcome-first animate" data-animate="fadeInUp"> Welcome to</span>
                        <h1 class="welcome-title animate" data-animate="fadeInUp">Budget Better</h1>
                        <p class="animate" data-animate="fadeInUp">The Worlds Budget App</p>
                        <div class="scroll-down next-section animate data-animate="fadeInUp><img src="images/mouse-scroll.png" alt=""><span>Scroll Down</span></div>
                    </div>
                </div>
            </div>


            <div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Services</span>
                                <h2>What We Do</h2>
                            </div>
                            <div class="services-section">
                                <div class="services-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                            <h3>Database with over 1,000 cities</h3>
                                            <p> No more surprise expenses. Budget Better is supported with a database with over 1,000 cities
                                                globally to best handle your finances. </p>
                                        </div>
                                    </div>

                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                                            <h3>All your finances in one place</h3>
                                            <p> Whether you are studying abroad, interning in a new city, or hold a work study job at school
                                                Budget Better will follow you.</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                            <h3>Never go broke again</h3>
                                            <p> Budget Better works for your best financial interest. Our application
                                                ensures you are aware of how your weekly income will be budgeted.</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                            <h3>Mobile Coming Soon</h3>
                                            <p> As an apprecitation of your support we are announcing the launch of our mobile app. We hope to
                                                see you Spring of 2021 at the Draper Competition located at Smith College. </p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                                            <h3>Fast Support</h3>
                                            <p> We are committed to providing excellent customer service to best prepare you on your financial journey.
                                                Please contact us by email or phone.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                            <h3> Partnerships</h3>
                                            <p>If you'd like to partner with us or find out how we can bring our services to you please contact us for more information.</p>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!--This is the teams section that will uncommented until further notice-->
            <!-- <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Our Team</span>
                                <h2>Meet our Team</h2>
                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/daniela.jpg" alt="Daniela's Picture" style="width:380px;height:400px;">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4 style="text-align:center;">Daniela Martinez</h4>
                                                <p style="text-align:center;"> <span style="color: #fd7e14"> School:</span> Smith College
                                                    <br>  <span style="color: #fd7e14"> Major:</span> Government
                                                    <br> <span style="color: #fd7e14"> Hobbies: </span> I like to write scripts, watch movies and listen to bachata (dance it too).
                                                    <br> <span style="color: #fd7e14"> Role: </span> Founder and CEO</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/Mayeline.jpg" alt="Mayeline's Picture" style="width:380px;height:400px;">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4 style="text-align:center;">Mayeline Peña </h4>
                                                <p style="text-align:center;"><span style="color: #fd7e14">School: </span> Smith College
                                                    <br> <span style="color: #fd7e14"> Double Major: </span> Computer Science and Dance
                                                    <br> <span style="color: #fd7e14"> Hobbies: </span> In my free time I like to dance, bake, and watch TV
                                                    <br> <span style="color: #fd7e14"> Role:</span> Product Manager</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/Arris.jpg" alt="Arris's Picture" style="width:380px;height:400px;">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4 style="text-align:center;" >Arris Moise</h4>
                                                <p style="text-align:center;"> <span style="color: #fd7e14"> School: </span> Smith College
                                                    <br> <span style="color: #fd7e14"> Major: </span>Computer Science
                                                    <br> <span style="color: #fd7e14"> Hobbies: </span> I like to collect Funko Pops and playing video games.
                                                    <br> <span style="color: #fd7e14"> Role: </span> Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/Neamat.png" alt="Neamat's Picture" style="width:380px;height:400px;">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4 style="text-align:center;">Neamat Sabry</h4>
                                                <p style="text-align:center;"> <span style="color: #fd7e14"> School: </span> Smith College
                                                    <br> <span style="color: #fd7e14"> Major: </span> Computer Science
                                                    <br> <span style="color: #fd7e14"> Hobbies: </span> I like playing on pianos & drawing people.
                                                    <br> <span style="color: #fd7e14"> Role: </span> Developer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/Eileen.jpg" alt="Eileen's Picture" style="width:380px;height:400px;">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4 style="text-align:center;" >Eileen Asinc Luna</h4>
                                                <p style="text-align:center;"><span style="color: #fd7e14">School: </span> Smith College
                                                    <br> <span style="color: #fd7e14"> Double Major: </span> Computer Science and Sociology
                                                    <br> <span style="color: #fd7e14"> Hobbies: </span> I like listening to reggaeton/salsa while cross stitching patterns for my friends.
                                                    <br> <span style="color: #fd7e14"> Role: </span> Developer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
<!--This is the teams section that will uncommented until further notice-->




            <!-- Testimonals Slide
            <div class="section animated-row" data-section="slide04">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>TESTIMONIALS</span>
                                <h2>what THEY SAY?</h2>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                <div class="testimonials-section">
                                    <div class="testimonials-slider owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="images/img_holder_140x140.png" class="rounded-circle" alt="profile 1">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4> Student X</h4>
                                                    <p>"Ut varius leo eu mauris lacinia, eleifend posuere urna gravida. Aenean a mattis lacus."</p>
                                                    <span>Traveled To Morroco</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="images/img_holder_140x140.png" class="rounded-circle" alt="profile 2">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Student X</h4>
                                                    <p>"Nam iaculis, leo nec facilisis sollicitudin, dui massa tempus odio, vitae malesuada ante elit vitae eros."</p>
                                                    <span>Traveled to Spain </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="images/img_holder_140x140.png" class="rounded-circle" alt="profile 3">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Student X</h4>
                                                    <p>"Etiam efficitur, tortor facilisis finibus semper, diam magna fringilla lectus, et fringilla felis urna posuere tortor."</p>
                                                    <span>Traveled to Germany</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

-->
            <!-- Contact Us Slide-->
            <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Contact</span>
                                <h2>Get In Touch!</h2>
                            </div>
                            <div class="contact-section">
                                <div class="row">
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <div class="contact-box">
                                            <div class="contact-row">
                                                <i class="fa fa-map-marker"></i> 1 Chapin Way Unit 6793 Northampton, Massachusetts 01063
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-phone"></i> 929-462-3986
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-envelope"></i> Budgetbetter1@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <form id="ajax-contact" method="POST" action="/sendhtmlemail">
                                            <div class="input-field">
                                                <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                                            </div>
                                            <div class="input-field">
                                                <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                                            </div>
                                                <button class="btn" type="submit" name="submit">Submit</button>
                                        </form>
                                        <div id="form-messages" class="mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Register for free</h5>
        </li>
        <li class="list-inline-item">
          <a href="/register" class="btn btn-outline-white btn-rounded">Sign up!</a>
        </li>
      </ul>
      <!-- Call to action -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      BudgetBetter
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
            </div>
            <!-- end of contact us slide-->












        </div>

        <!-- <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div> -->
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    </body>
</html>
