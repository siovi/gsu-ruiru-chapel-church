<!DOCTYPE html>
<html lang="en">
  <head>
    <title style="color: green">Ruiru Charpel Church</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
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

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
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
      <a href=""{{ url('/Contact') }}"">Contact Us</a>
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
      <a href="{{ url('/') }}" >Praise and Worship</a>
      <a href="{{ url('/') }}">Media and IT</a>
      <a href=""{{ url('/') }}"">Intercessory</a>
	  <a href="{{ url('/') }}">Choir</a>
      <a href=""{{ url('/') }}"">Ushering</a>
    </div>
  </li>
	          <li class="nav-item"><a href="{{ url('/Sermons') }}" class="nav-link"><span>Sermons</span></a></li>
			  <li class="nav-item"><a href="{{ url('/login') }}"class="nav-link"><span>Login</a></li>
			 
			  <!--<li class="nav-item"><a href="{{ url('/register') }}" class="nav-link"><span>Register</span></a></li>-->
	        </ul>
           </div>
       
      </div>
        
	    </div>
	  </nav>



	  <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
              <a class="navbar-brand" href="{{ url('/home') }}" style="color: green"><span class="flaticon-bible"></span>Ruiru Charpel</a>
	          	<div class="text">
	          		<div class="subheading">
	          			<span>Ruiru Charpel Church</span>
	          		</div>
		            <h1 class="mb-4">Following <span>Jesus</span> wherever we are</h1>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		            <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
	            </div>
	          </div>
	        </div>
        </div>
      </div>


      <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">

	          <div class="col-md-8 text-center ftco-animate mt-5">
              <a class="navbar-brand" href="{{ url('/home') }}" style="color: green"><span class="flaticon-bible"></span>Ruiru Charpel</a>
	          	<div class="text">
	          		<div class="subheading">
	          			<span>Ruiru Charpel Church</span>
	          		</div>
		            <h1 class="mb-4">We <span>Love</span> God, We Believe in God</h1>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		            <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">
    	<div class="container-fluid px-0">
    		<div class="row d-md-flex text-wrapper">
					<div class="one-half img" style="background-image: url('images/about.jpg');"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
						<div class="text-inner pl-md-5">
              <h3 class="heading">Welcome to <span>Christian</span> Church</h3>
              <p>Far far away,<strong>creative</strong> behind the word mountains, far from the countries Vokalia and Consonantia, there live the <strong>success</strong> blind texts. Separated they live in Bookmarksgrove</p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <ul class="my-4">
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Even the all-powerful Pointing</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>
              </ul>
            </div>
					</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-users"></span>
              	</div>
                <strong class="number" data-number="98087">0</strong>
                <span>Members</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-user"></span>
              	</div>
                <strong class="number" data-number="309">0</strong>
                <span>Pastors</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-money"></span>
              	</div>
                <strong class="number" data-number="9350500">0</strong>
                <span>Donation</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-home"></span>
              	</div>
                <strong class="number" data-number="206">0</strong>
                <span>Churches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Christian Church Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-praying"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Daily Prayers</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-bible"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Continous Teaching</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-church"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Set of Sermons</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-rings"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Wedding</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-social-care"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Community Helpers</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section bg-light" id="sermons-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Christian Church Sermons</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-1.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>by pastor:</span>
    							<h3>Jerry Simon</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Let the Sunset Inspire You</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>July 01, 2019</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-2.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>by pastor:</span>
    							<h3>Jerry Simon</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Developing Spiritual Mentality</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>July 01, 2019</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-3.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>by pastor:</span>
    							<h3>Jerry Simon</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Let the Bible Motivate You</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>July 01, 2019</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>

        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-4.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>by pastor:</span>
    							<h3>Jerry Simon</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Let the Sunset Inspire You</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>July 01, 2019</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-5.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>by pastor:</span>
    							<h3>Jerry Simon</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Developing Spiritual Mentality</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>July 01, 2019</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-6.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>by pastor:</span>
    							<h3>Jerry Simon</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Let the Bible Motivate You</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>July 01, 2019</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>
        </div>
			</div>
		</section>

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
				<div class="row">
					<div class="col-md-12 col-lg-6 col-xl-4">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/event-1.jpg);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time">8:30am - 11:30am</span>
	        				<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        				<div class="meta">
		        				<p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
		        				<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        				<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-12 col-lg-6 col-xl-4">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/event-2.jpg);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time">8:30am - 11:30am</span>
	        				<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        				<div class="meta">
		        				<p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
		        				<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        				<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-12 col-lg-6 col-xl-4">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/event-3.jpg);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time">8:30am - 11:30am</span>
	        				<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        				<div class="meta">
		        				<p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
		        				<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        				<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>

        	<div class="col-md-12 col-lg-6 col-xl-4">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/event-4.jpg);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time">8:30am - 11:30am</span>
	        				<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        				<div class="meta">
		        				<p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
		        				<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        				<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-12 col-lg-6 col-xl-4">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/event-5.jpg);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time">8:30am - 11:30am</span>
	        				<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        				<div class="meta">
		        				<p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
		        				<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        				<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-12 col-lg-6 col-xl-4">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/event-6.jpg);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time">8:30am - 11:30am</span>
	        				<h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
	        				<div class="meta">
		        				<p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
		        				<p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
		        				<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-causes ftco-no-pb" id="giving-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Donate Charity</span>
            <h2 class="mb-5">Causes Needs Our Help</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Health care, Food</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="40"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>40%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(images/cause-2.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Restored the Old City Church</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="50"
								  	aria-valuemin="0" aria-valuemax="100" style="width:50%">
								    <span>50%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(images/cause-3.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Save Childern For Hunger</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(images/cause-4.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Save Childern For Hunger</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-4 justify-content-end">
					<div class="col-lg-10">
						<div class="donated-intro bg-darken p-4 p-md-5">
							<h2>Donation so far <span>$</span><strong class="number" data-number="9891000">0</strong></h2>
    					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
    					<p><a href="#" class="btn btn-black px-4 py-3">Donate now!</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="ftco-daily-verse img" style="background-image: url(images/bg_4.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row justify-content-center align-items-center">
		    			<div class="col-md-2 ftco-animate">
		    				<div class="icon">
		    					<span class="flaticon-church"></span>
		    				</div>
		    			</div>
		    			<div class="col-md-10 daily-verse pl-md-5 ftco-animate">
		    				<span class="subheading">Jesus Christ Said:</span>
		    				<h3>"16 For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life."</h3>
		    				<h4 class="h5 mt-4 font-weight-bold"><span>Bible:</span> John 3:16 KJV</h4>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Read the Latest Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="pastor-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section text-center ftco-animate">
          	<span class="subheading">Pastors</span>
            <h2 class="mb-4">Church Pastor</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Lloyd Wilson</h3>
									<span class="position mb-4">Lead Pastor</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-2.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Rachel Parker</h3>
									<span class="position mb-4">Lead Pastor</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-3.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Ian Smith</h3>
									<span class="position mb-4">Lead Pastor</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-4.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Alicia Henderson</h3>
									<span class="position mb-4">Lead Pastor</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

	<!--Giving Section-->
	<section class="ftco-section contact-section ftco-no-pb" id="add_offering">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Giving</span>
            <h2 class="mb-4">Give Your Offering Here</h2>
            <p>Give anything You have via the following paybill, God Bless You</p>
			<h2 class="mb-4" style="color: green; font-weight:bold;">Paybill: 079037</h2>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-12 ">
           <form class="form-horizontal" role="form" method="POST" action="{{ url('addOffering')  }}">
                        {{ csrf_field() }}

                         <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Name</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="name"  type="text" placeholder = "Name" required> 
                                   @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                 </div>
                               </div>
                                  <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Phone Number</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="phoneno"  type="text" placeholder = "Phone Number" required>  
                                   @if ($errors->has('phoneno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneno') }}</strong>
                                    </span>
                                @endif
                                 </div>
                               </div>
                        
                                 <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Amount</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="amount"  type="text" placeholder = "Amount..." required>  
                                   @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                                 </div>
                               </div>
							    
                                  
                                 </div></div>
								 <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Reason For Giving</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="description"  type="text" placeholder = "Description..." required> 
                                   @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                                 </div>
                               </div>
                                  <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Type of Giving</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="reason"  type="text" placeholder = "Reason..." required> 
                                   @if ($errors->has('reason'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                @endif
                                 </div>
                               </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class=""></i> Send
                                </button>
                            </div>
                        </div>
                    </form>
          
             </div>
   
           </div>
        </section>


		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white"></div>
		</section>

		<section class="ftco-gallery ftco-section ftco-no-pb mb-4">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">Christian Church Photo Gallery</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
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