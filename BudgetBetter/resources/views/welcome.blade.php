<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
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
                                    <li ><a href="{{ route('login')}}"><strong>Login </strong></a></li>

                                    <li ><a href="{{ route('register')}}"><strong>Sign Up </strong></a></li> 

                                    <li data-menuanchor="slide02"><a href="#slide02"><strong>Services</strong></a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03"><strong>Our Team</strong></a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04"><strong>Testimonials</strong></a></li>
                                    <li data-menuanchor="slide05"><a href="#slide05"><strong>Contact Us</strong></a></li>
                               



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
                                            <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu maximus enim tortor vitae quam. </p>
                                        </div>
                                    </div>

                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                                            <h3>All of your abroad finances in one place</h3>
                                            <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu maximus enim tortor vitae quam. </p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                            <h3>Never go broke again</h3>
                                            <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu maximus enim tortor vitae quam. </p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                            <h3>Mobile Coming Soon</h3>
                                            <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu maximus enim tortor vitae quam. </p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                                            <h3>Fast Support</h3>
                                            <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu maximus enim tortor vitae quam. </p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                            <h3> I have no idea</h3>
                                            <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu maximus enim tortor vitae quam. </p>
                                        </div>
                                    </div>


                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          


            <div class="section animated-row" data-section="slide03">
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
                                                <img src="images/daniela.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Daniela Martinez</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/img_holder.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Arris Moise</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap themes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/img_holder.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Eileen</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap layouts.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/daniela.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Daniela Martinez</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/img_holder.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Arris Moise</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download Bootstrap CSS templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/img_holder.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4> Maha</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/img_holder.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Eileen</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="/images/img_holder.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Arris Moise</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/daniela.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Daniela Martinez</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonals Slide-->
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


            <!-- Contact Us Slide-->
            <div class="section animated-row" data-section="slide05">
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
                                                <i class="fa fa-map-marker"></i> 123 New Street Here, Wonderful City 10220
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-phone"></i> 123-456-7890
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-envelope"></i> BudgetBetter@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <form id="ajax-contact" method="post" action="#">
                                            <div class="input-field">
                                                <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                                            </div>
                                            <div class="input-field">
                                                <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                                            </div>
                                            <button class="btn" type="submit">Submit</button>
                                        </form>
                                        <div id="form-messages" class="mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of contact us slide-->
        </div>

        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  

       

            





    </body>
</html>
