<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
    <title style="color: green">Ruiru Charpel Church</title>

<style media="screen">
.icofont{
  font-size: 35px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

/* Page content */


/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky  {
  padding-top: 60px;
}
.dropbtn {
  background-color: ;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: vertical;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: blue;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}

</style>



<link href="{{URL::asset('/csss/style.min.css')}}" rel="stylesheet" type="texts/css" >
<link rel="stylesheet" href="{{URL::asset('/css/bootstrap/bootstrap-grid.css')}}">
<link rel="stylesheet" href="{{URL::asset('/css/bootstrap/bootstrap-reboot.css')}}">

<link rel="stylesheet" href="{{URL::asset('/css/css/mixins/_text-hide.css')}}">
<link rel="stylesheet" href="{{URL::asset('/css/css/mixins/bootstrap-reboot.css')}}">
<link rel="stylesheet" href="{{URL::asset('/css/sajax-loader.gif')}}">
<link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{URL::asset('/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/font-awesome/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/font-awesome/css/font-awesome.css')}}">

<link rel="stylesheet" href="{{URL::asset('/assets/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('/plugins/assets/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('/plugins/morris/morris.css')}}">
<link rel="stylesheet" href="{{URL::asset('/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('/assets/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('/plugins/iCheck/flat/blue.css')}}">
<link rel="stylesheet" href="{{URL::asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">


<link rel="stylesheet" href="{{URL::asset('plugins/iCheck/flat/blue.css')}}">
<link rel="stylesheet" href="{{URL::asset('/plugins/morris/morris.cs')}}">
<link rel="stylesheet" href="{{URL::asset('/plugins/iCheck/flat/blue.css')}}">
<link rel="stylesheet" href="{{URL::asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    
    <link rel="stylesheet" href="{{URL::asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{URL::asset('/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">

<link href="{{ URL::asset('/css/custom.css') }}" rel="stylesheet">
<link href="{{ URL::asset('/css/stylemashable.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('/css/icofont.min.css')}}">
<link href="{{ URL::asset('/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::asset('/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">

<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') }}"" rel="stylesheet">
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap') }}"" rel="stylesheet">
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap') }}"" rel="stylesheet">
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Great+Vibes&display=swap') }}"" rel="stylesheet">


<link rel="stylesheet" href="css/style.css">
  </head>
 
		  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	     <div class="collapse navbar-collapse" id="ftco-nav">

	      
         <div class="nav"  id="app-navbar-collapse">
	 <li class="nav-item"><a href="{{ url('/HomePage') }}" class="nav-link"><span>Home</span></a></li>
			   <li class="dropdown nav-item">
    <a href="javascript:void(0)" class="dropbtn nav-link"><span>About Us </a>
    <div class="dropdown-content">
      <a href="{{ url('/Pastors') }}" >Pastors</a>
      <a href="{{ url('/Vission') }}">Vision &amp; Mission</a>
      <a href="{{ url('/Contact') }}">Contact Us</a>
	  <a href="{{ url('/SundayServices') }}">Sunday Services</a>
    </div>
  </li>
	          
			   <li class="nav-item"><a href="{{ url('/Events') }}" class="nav-link"><span>Events</span></a></li>
	          <li class="nav-item"><a href="{{ url('/Fellowships') }}" class="nav-link"><span>Fellowships</span></a></li>
	          <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link"><span>Blog</span></a></li> 
              <li class="nav-item"><a href="{{ url('/Givings') }}"class="nav-link"><span>Giving</span></a></li>
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
			  <li class="nav-item"><a href="{{ url('/Sermons') }}" class="nav-link"><span>Sermons</span></a></li>
			  <li class="nav-item"><a href="{{ url('/login') }}"class="nav-link"><span>Login</a></li>
			  <!--<li class="nav-item"><a href="{{ url('/register') }}" class="nav-link"><span>Register</span></a></li>-->
	        </ul>
           </div>
       
      </div>
        
	    </div>
	  </nav>




		<section class="ftco-intro img" id="events-section" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
				</div>
			</div>
		</section>


		
		<section class="ftco-section bg-light ftco-event" id="events-section">
			<div class="container-fluid px-4 ftco-to-top">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Events</span>
            <h2 class="mb-5">Upcoming Events</h2>
          </div>
        </div>


		<!--div class="row"-->
		

                     <div class="row justify-content-center bg-info pb-5">

		
					 
                      @if (count($posts) > 0)
                        @foreach ($posts -> all() as $post)
                        <div class="col-md-3 col-lg-3 col-xl-3 bg-info text-success">
                  <div class="event-wrap ftco-animate">
 
						<div class="text p-4 align-items-center">
        				<div>
	        				<span class="time">
                        <h3>Event Title: {{$post->post_title}}</h3></span>
                        <br>
                       <div class="meta">
					   
                       <p>Event:  {{$post->post_body}}</p>
                        <p>Venue:  {{$post->venue}}</p>

                        <p>Time:  {{$post->time}}</p>
                        <ul class="nav nav-pills">
                        @if(Auth::id()==1)
                          <li role="presentation" >
                            <a href='{{url("/view/{$post->id}")}}'>
                              <span class="fa fa-eye">VIEW</span>
                            </a>

                          </li>
                         
                          <li role="presentation" >
                            <a href='{{url("/edit/{$post->id}")}}'>
                              <span class="fa fa-pencil-square-o">EDIT</span>
                            </a>

                          </li>
                          <li role="presentation" >
                            <a href='{{url("/delete/{$post->id}")}}'>
                              <span class="fa fa-trash">DELETE</span>
                            </a>

                          </li>
                          @endif
                        </ul>

                        <cite style="float: left;"> Posted on: {{date('M j, Y H:i', strtotime ($post->updated_at))}}</cite>
                        <hr/></div>
                      </div> 
                      
                </div>


                    </div></div> 


                        @endforeach
                        
                      @else
                        <p>No Event is Available!</p>
                        @endif

                        

                        		         




               </div>

             </div></div></div></div> 

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
		</section>
		

		

		
		
    </div>
    
    </div>
		
	
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
