@extends('layouts.header')
<style type="text/css">
    
</style>
@section('content')



        <section class="ftco-intro img" id="events-section" style="background-image: url(images/reg_bg.jpg);">
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
             <span class="subheading">Giving</span>
            <h2 class="mb-4">Give Your Offering Here</h2>
          </div>
        </div>



        

    <!--Giving Section-->
    <section class="ftco-section contact-section ftco-no-pb" id="add_offering">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            
<h2 class="mb-4" style="color: #8ebf42">God is a giver.</h2>

            <h2 class="mb-4" style="color: green; font-weight:bold;">Paybill: 079037</h2>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-12 ">
          <div class="col-md-6 ">
          
         @if (count ($errors) > 0)
                    @foreach ($errors-> all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif    

                @if (session('response'))
                   <div class="álert alert-success">{{session('response')}}</div>
                   @endif

           <form class="form-horizontal" role="form" method="POST" action="{{ url('addOfferingss')  }}">
                        {{ csrf_field() }}

                         <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Name</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="name"  type="text" placeholder = "Name" required> 
                                   @if ($errors -> has('name'))
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
                                   @if ($errors -> has('phoneno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneno') }}</strong>
                                    </span>
                                @endif
                                 </div>
                               </div>
                        
                                 <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Amount</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="amount"  type="text" placeholder = "$..." required>  
                                   @if ($errors -> has('amount'))
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
                                   @if ($errors -> has('description'))
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
                                   @if ($errors -> has('reason'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                @endif
                                 </div>
                               </div></div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <div class="flex-center position-ref full-height">

  

            <div class="content">

              

                  

                <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>

  

                <a href="{{url('payment') }}" class="btn btn-success">Pay from Paypal</a>

                          
            </div>

        </div></div></div>
                                </button>
                            </div>
                        </div>
                    </form>

                 <!--   <a href="{{ url('subscribe/paypal') }}"><img src="/images/paypal-png.png"></a>-->
          
             </div>

   
           </div></div></div></div>
            
                   <br>
        </section>
        <section class="ftco-section contact-section ftco-no-pb" id="add_offering">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            
<h2 class="mb-4" style="color: #8ebf42">Why do we give?</h2>
<p>



Giving is one of the key ways we worship God. Throughout Scripture, we see that God gave. As we seek to become more like Christ, we will grow in our giving. The storehouse spoken of in Malachi is what we consider the local church. By partnering our monies together, God�s work is done more effectively. Even Paul recognized this in the newly formed churches of the New Testament. He tells the Corinthians in 2 Corinthians 8:13-15, �Our desire is not that others might be relieved while you are hard pressed, but that there might be equality.�

At the present time your plenty will supply what they need, so that in turn their plenty will supply what you need. Then there will be equality, as it is written: �He who gathered much did not have too much, and he who gathered little did not have too little.�

</p>
        
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
@endsection