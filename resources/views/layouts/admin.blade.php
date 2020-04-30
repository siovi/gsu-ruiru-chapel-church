<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ruiru Charpel Church</title>
  <!-- Fonts -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script type="text/javascript" src="JS/jquery.min.js"></script>
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
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/activity') }}" class="nav-link" style="color: #cc0000; font-weight:bold;">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/home') }}" class="nav-link" style="color: green; font-weight:bold; font-size: ">Blog</a>
      </li>
                 
    </ul>
    
               

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    
      
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
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
                                
                            </ul>
                        </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="images/IMG_20191216_182059.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">My Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

      <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
	 <li class="nav-item has-treeview menu-open">
          
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
               Activities
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            
        
            <ul class="nav nav-treeview">
            @if(Auth::id()==1)



            <li class="nav-item has-treeview ">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-users nav-icon"></i>
              <p >
              Members
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-members')}}" class="nav-link">
                <i class="fa fa-user-md"></i>
                  <p>Members</p>
                </a>
              </li>
             <!--<li class="nav-item">
                <a href="{{ url('/add_new_Believer') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Believers</p>
                </a>
              </li-->
              <li class="nav-item">
                <a href="{{ url('ajax-new_believers')}}" class="nav-link">
                <i class="fa fa-user-circle-o"></i>
                  <p>New Believers</p>
                </a>
              </li>
            </ul>
          </li>





          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-list"></i>
              <p>
              Attendance
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--li class="nav-item">
                <a href="{{ url('/add_new_Attendance') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add New Attendance</p>
                </a>
              </li-->
              <li class="nav-item">
                <a href="{{ url('ajax-attendance')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                  <p>View Attendance</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-inbox"></i>
              <p>
              Contributions
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-sunday_offering')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p> Add Sunday Offering</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="{{ url('/add_giving') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Other Giving</p>
                </a>
              </li-->
              <!--li class="nav-item">
                <a href="{{ url('/giving_type') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Giving Categories/Types</p>
                </a>
              </li-->
            
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-user-md"></i>
              <p>
              Ministries
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-ministry')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>  Ministry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/MinistryRequest') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Join Request</p>
                </a>
              </li>
            
            </ul>
          </li>
            
            


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-bath"></i>
              <p>
              Baptism
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-baptised_member')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Baptised Members</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="{{ url('/add_Baptised_member') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Member</p>
                </a>
              </li-->
            
            </ul>
          </li>
            



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-home"></i>
              <p>
              Home Based Churches
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-hbc')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>HBC</p>
                </a>
              </li>
              
             
            
            </ul>
          </li>
            

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-object-ungroup nav-icon"></i>
              <p>
              Church Accessories
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--li class="nav-item">
                <a href="{{ url('/add_asset') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add New Accessory</p>
                </a>
              </li-->
              <li class="nav-item">
                <a href="{{ url('ajax-assets')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>View Accessories</p>
                </a>
              </li>
            
            </ul>
          </li>
             
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-street-view nav-icon"></i>
              <p>
              Visitors
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-visitors')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Visitors</p>
                </a>
              </li>
              </ul>
          </li>

              <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-universal-access"></i>
              <p>
              Leadership
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-leaders')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Church Leaders</p>
                </a>
              </li>
              </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-spotify"></i>
              <p>
              Events
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/Event') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
              </ul>
          </li>
             
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-film"></i>
              <p>
              Sermon
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ url('/add_sermons') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Sermon</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-th-large"></i>
              <p>
              Messages
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/add_message') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Send Message</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/add_message') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Received Messages</p>
                </a>
              </li>
        </ul>
          </li>
      
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-leanpub"></i>
              <p>
              Bible Study Groups
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('ajax-bs')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bible Study Group</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('ajax-bs_register')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Register Member To BS Group</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/BSRequest') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>BS Members</p>
                </a>
              </li>
            
            </ul>
          </li>
            

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
            <i class="fa fa-sticky-note"></i>
              <p>
             Notices
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/notices') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Notice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/allNotices') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Notices</p>
                </a>
              </li>
              </ul>
          </li>
            
           
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-info">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Mailbox
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/mailbox') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/compose') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/read_mail') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          @endif


 
         
          @if(Auth::id()!==1)



           
              <li class="nav-item">
                <a href="{{ url('/Leaders') }}" class="nav-link bg-info">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>View Church Leaders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/allNotices') }}" class="nav-link bg-info">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Notices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/join_BS') }}" class="nav-link bg-info">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Join Bible Study Group</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/join_Ministry') }}" class="nav-link bg-info">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Join Ministry</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/register_for_Baptism') }}" class="nav-link bg-info">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Register For Baptism</p>
                </a>
              </li>
            
          </li>







           @endif
          </ul>

		 </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

@yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <nav class="navbar navbar-default navbar-static-top">
     <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="" aria-hidden=""></i> by <a href="" target="">Jonathan Siovi Wanjala</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div></nav>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>
</body>
</html>


