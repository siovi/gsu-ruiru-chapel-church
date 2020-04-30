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
        <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      
    <div class="container" align="center" >
    <div class="col-md-10">
    
                        @if ($message = Session::get('success'))
  
                      <p>{!! $message !!}</p>

                     Session::forget('primary');
                    @endif

                    @if ($message = Session::get('error'))

                      <p>{!! $message !!}</p>

                    <?php Session::forget('error');?>
                    @endif

            <!-- general form elements  -->
            <div class="card card-success" align="center">
              <div class="card-header">
                <h3 class="card-title">Paywith Paypal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" align="center">
                <form class="form-horizontal" role="form" method="POST" id="payment-form"
                  action="{!! URL::to('paypal') !!}">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name"  required="required">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" id="phoneno" name="phoneno"  required="required">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Enter Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount"  required="required">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Giving Type</label>
                        <input type="text" class="form-control" id="amount" name="description"  required="required">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Reason for Giving</label>
                        <textarea class="form-control" rows="1" id="amount" name="reason" placeholder="Optional ..."></textarea>
                      </div>
                      </div> 
                      </div> 
                      <div class="form-group" align="center">
                      <div class="col-sm-8">
                         <button class="btn btn-success" >Pay with PayPal</button> </div>
                                    <a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" 
                                    title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">  <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" 
                                      alt="PayPal Logo"></a></td></tr></table>
                                      <a href=""></a>    
                                    </div>
                                    </div>
                                     </div>
                                    </form>
                                    <div class="col-md-7 heading-section ftco-animate text-center">
                                           <h2 style="color: blue; font-weight:bold;"class="subheading">Or Give Via</h2>
                                       <h2 style="color: green; font-weight:bold;">Paybill: 079037</h2>
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