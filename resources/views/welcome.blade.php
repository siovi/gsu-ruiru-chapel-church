<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
    <title style="color: green">Ruiru Charpel Church</title>

        <!-- Fonts -->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/css/css/app.css') }}">
   <link href="/csss/css/bootstrap.min.css" rel="stylesheet"/>
   
   <link href="{{ URL::asset('csss/css/style.css') }}" rel="stylesheet" type="text/css" >
   

   <link rel="stylesheet" href="{{ URL::asset('public/js/query-1.11.1.min.js') }}">

  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="csss/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="csss/css/animate.css">
    
    <link rel="stylesheet" href="csss/css/owl.carousel.min.css">
    <link rel="stylesheet" href="csss/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="csss/css/magnific-popup.css">

    <link rel="stylesheet" href="csss/css/aos.css">

    <link rel="stylesheet" href="csss/css/ionicons.min.css">
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/flaticon/font/_flaticon.scss">
    <link rel="stylesheet" href="csss/css/icomoon.css">
    <link rel="stylesheet" href="csss/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="csss/css/style.css">
  </head>
 
    </head>
  
            <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
            <div class="flex-center position-ref full-height">
          
	  
	  
      <nav class="navbar navbar-expand-lg bg-info navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
          <div class="container">
            
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
  
           <div class="collapse navbar-collapse" id="ftco-nav">
  
            
           <div class="nav"  id="app-navbar-collapse">
           <li class="nav-item"><a href="{{ url('/welcome') }}" class="nav-link"><span>Home</span></a></li>
                 <li class="dropdown nav-item">
      <a href="javascript:void(0)" class="dropbtn nav-link"><span>About Us </a>
      <div class="dropdown-content">
        <!--a href="{{ url('/Pastors') }}" >Pastors</a-->
        <a href="{{ url('/Vission') }}">Vision &amp; Mission</a>
        <a href="{{ url('/Contact') }}">Contact Us</a>
        <!--a href="{{ url('/SundayServices') }}">Sunday Services</a-->
      </div>
    </li>
                
               <!--li class="nav-item"><a href="{{ url('/Events') }}" class="nav-link"><span>Events</span></a></li-->
                <li class="nav-item"><a href="{{ url('/Fellowships') }}" class="nav-link"><span>Fellowships</span></a></li>
                <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link"><span>Blog</span></a></li> 
                <!--li class="nav-item"><a href="{{ url('/Givings') }}"class="nav-link"><span>Giving</span></a></li-->
                 <li class="dropdown nav-item">
      <a href="javascript:void(0)" class="dropbtn nav-link"><span>Ministries </a>
      <div class="dropdown-content">
      <a href="{{ url('/Praise_and_Worship') }}" >Praise and Worship</a>
        <a href="{{ url('/Media_and_IT') }}">Media and IT</a>
        <a href="{{ url('/Sunday_School') }}">Sunday School</a>
        <a href="{{ url('/Choir') }}">Choir</a>
        <a href="{{ url('/Ushering') }}">Ushering</a>
        <a href="{{ url('/Catering') }}">Catering</a>
        <a href="{{ url('/youths') }}">Youths</a>
        <a href="{{ url('/women') }}">Women</a>
        <a href="{{ url('/missions') }}">Mission</a>
        <a href="{{ url('/Evangelism') }}">Evangelism</a>
        <a href="{{ url('/Counselling') }}">Counselling</a>
      </div>
    </li>
                <li class="nav-item"><a href="{{ url('/Prayer') }}" class="nav-link"><span>Prayer Request</span></a></li>
                <!--li class="nav-item"><a href="{{ url('/Sermons') }}" class="nav-link"><span>Sermons</span></a></li-->
                <li class="nav-item"> @if (Route::has('login'))
                <div class="top-right links auth-link">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link" style="color: blue;">Back To Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"class="nav-link" >Login</a>
                    @endauth
                </div>
            @endif</li>
              <!-- <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link"><span>Register</span></a></li>-->
              </ul>
             </div>
         
        </div>
          
          </div>
        </nav>
        
  
  
  
        
        <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(/csss/images/IMG_20191216_182059.jpg);">
            <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate mt-5">
                <a class="navbar-brand" href="{{ url('/home') }}" style="color: white"><span class="flaticon-bible"></span><b>GSU Ruiru Charpel</b></a>
                    <div class="text">
                        <div class="subheading">
                            <span  style="color: yellow;">Interdenomination Church</span>
                        </div>
                      <h1 class="mb-4">The <span>River</span>of Healing</h1>
                      <h3 class="mb-4"><span style="color: white"><b>Ezekiel 47</b></span></h3>
                 <!--p>We Love God.</p-->
                 
                      <p><a href="{{ url('/Contact') }}" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="{{ url('/Vission') }}" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
                  <div class="pull-right">
                 <marquee behavior="" direction=""><h2 style="color: green;"><b>WELCOME TO OUR SUNDAY SERVICES, 1ST SERVICE BEGINS AT 9:30AM AND SECOND SERVICE BEGINS AT 11:30AM</b></h2></marquee>
                 </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
  
        
        <div class="slider-item js-fullheight" style="background-image:url(/csss/images/IMG_20191215_132801.jpg);">
            <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
  
                <div class="col-md-8 text-center ftco-animate mt-5">
                <a class="navbar-brand" href="{{ url('/home') }}" style="color: white"><span class="flaticon-bible"></span><b>GSU Ruiru Charpel</b></a>
                    <div class="text">
                        <div class="subheading">
                        <span  style="color: yellow;">Interdenomination Church</span>
                        </div>
                      <h1 class="mb-4">The <span>River</span>of Healing</h1>
                      <h3 class="mb-4"><span style="color: white"><b>Ezekiel 47</b></span></h3>
                      <p><a href="{{ url('/Contact') }}" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="{{ url('/Vission') }}" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
                  <div class="pull-right">
                 <marquee behavior="" direction=""><h2 style="color: green;"><b>WELCOME TO OUR SUNDAY SERVICES, 1ST SERVICE BEGINS AT 9:30AM AND SECOND SERVICE BEGINS AT 11:30AM</b></h2></marquee>
                 </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
        <div class="slider-item js-fullheight" style="background-image:url(/csss/images/bg_2.jpg);">
            <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
  
                <div class="col-md-8 text-center ftco-animate mt-5">
                <a class="navbar-brand" href="{{ url('/home') }}" style="color: white"><span class="flaticon-bible"></span><b>GSU Ruiru Charpel</b></a>
                    <div class="text">
                        <div class="subheading">
                        <span  style="color: yellow;">Interdenomination Church</span>
                        </div>
                      <h1 class="mb-4">The <span>River</span>of Healing</h1>
                      <h3 class="mb-4"><span style="color: white"><b>Ezekiel 47</b></span></h3>
                      <p><a href="{{ url('/Contact') }}" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="{{ url('/Vission') }}" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
                  <div class="pull-right">
                 <marquee behavior="" direction=""><h2 style="color: green;"><b>WELCOME TO OUR SUNDAY SERVICES, 1ST SERVICE BEGINS AT 9:30AM AND SECOND SERVICE BEGINS AT 11:30AM</b></h2></marquee>
                 </div>
                  </div>
                </div>
              </div>
          </div>
          <br>
        </div>
      </section>
          
     
    
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2 logo"><span>Christian</span> Church</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">About</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Staff</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Beliefs</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>History</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Mission</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Wedding &amp; Funerals</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Jobs &amp; Internship</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fellowships</a></li>
  
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Connect</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home Groups</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Recovery Groups</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Memberships</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Children &amp; Students</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Volunteer</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Counseling</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Assistance</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Service Hours</h2>
                <div class="opening-hours">
                    <p>Saturday Prayer Meeting: <span class="mb-3">10:00 am to 11:30 am</span></p>
                    <p>Sunday Service: <span class="mb-3">8:30 am to 11:30 am</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="" aria-hidden=""></i> by <a href="" target="">Jonathan Siovi Wanjala</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    
      <!-- JavaScripts -->
      <script type="text/javascript" src="{{ URL::asset('js/query-1.11.1.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  
  
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    
    <script src="js/main.js"></script>
      
    </body>
  </html>
  