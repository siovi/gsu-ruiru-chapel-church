<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ruiru Charpel Church</title>


        <!-- Fonts -->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('csss/css/css/app.css') }}">
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
    <link rel="stylesheet" href="csss/css/font-awesome.min.css">
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
  
           <div class="" id="ftco-nav">
  
            
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
        

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    

</body>

</html>
    

