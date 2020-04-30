
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chuka University Student Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="shortcut icon" href="App_Images/logo.png" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="Site/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="Site/css/style.css" rel='stylesheet' type='text/css' />
    <link href="Site/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="Site/css/font.css" type="text/css" />
    <link href="Site/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="Site/css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="Site/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="Site/js/jquery2.0.3.min.js"></script>
    <script src="Site/js/raphael-min.js"></script>
    <script src="Site/js/morris.js"></script>

    <script src="swal2/sweetalert2.min.js"></script>
    <link href="swal2/sweetalert2.min.css" rel="stylesheet" />

</head>
<body>
    <form method="post" action="./Dashboard.aspx" id="ctl00">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTg5MjY1OTQ2Mw9kFgJmD2QWAgIBD2QWAgICD2QWFAIHDw8WAh4EVGV4dAUMRUIxLzI4MDYxLzE2ZGQCCA8PFgIfAAUWSk9OQVRIQU4gU0lPVkkgV0FOSkFMQWRkAgkPDxYCHwAFCDMzMTA2NDc5ZGQCCw8PFgIfAAUJOC8zMS8yMDE2ZGQCDA8PFgIfAGVkZAINDw8WAh8ABQZLRU5ZQU5kZAIODw8WAh8ABRUwNzE4Njg1MjkyLDA3MTI4NDcyODJkZAIQDw8WAh8AZWRkAhEPDxYCHwBlZGQCEg8PFgIfAAULMzc2MzIyMDQwMDNkZGTb2JLdclvhy7mbKttR07Pc9Zpm7Ic0FG6Mbn830IYO/Q==" />
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B543B226" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAJ20leXzeQA9CPWLAbH/ewZcUxcRtBZhGU4e4YAFYxe+sojW7z5quj76pXfIz78ggPxOfT1fgD6ysA+u9bFWiuD" />
</div>
        <section id="container">
            <!--header start-->
            <header class="header fixed-top clearfix">
                <!--logo start-->
                <div class="brand">
                    <a href="Dashboard.aspx" class="logo">
                        <h4>Student Portal</h4>
                    </a>
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars"></div>
                    </div>
                </div>
                <!--logo end-->
                <div class="top-nav clearfix">
                    <!--search & user info start-->
                    <ul class="nav pull-right top-menu">
                        
                        
                        <li id="header_notification_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge bg-warning">1</span>
                            </a>
                            <ul class="dropdown-menu extended notification pre-scrollable">
                                <li>
                                    <p>Notifications</p>
                                </li>
                                
                                <li>
                                    <div class="alert alert-info clearfix">
                                        <span class="alert-icon"><i class="fa fa-bolt"></i>
                                            
                                        </span>
                                        <div class="noti-info">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                
                                <img id="ImgProfilePic" src="" />
                                
                                
                                <span class="username">JONATHAN SIOVI WANJALA</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <li><a href="Dashboard.aspx"><i class=" fa fa-suitcase"></i>Dashboard</a></li>
                                <li><a href="Default.aspx"><i class="fa fa-key"></i>Log Out</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!--search & user info end-->
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse">
                    <!-- sidebar menu start-->
                    <div class="leftside-navigation">
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li>
                                <a class="active" href="Dashboard.aspx">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-money"></i>
                                    <span>Financials</span>
                                </a>
                                <ul class="sub">
                                    <li><a href="feestatement.aspx">Fees Statement</a></li>
                                    <li><a href="Receipts.aspx">Receipts</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-pencil"></i>
                                    <span>Academics</span>
                                </a>
                                <ul class="sub">
                                    <li></li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fa fa-university"></i>
                                    <span>Examination</span>
                                </a>
                                <ul class="sub">
                                    
                                </ul>
                            </li>
                            
                            <li>
                                <a href="Change Password.aspx">
                                    <i class="fa fa-cog"></i>
                                    <span>Reset Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->

            <section id="main-content" style="padding: 10px">
                <section class="wrapper">
                    

    <style>
        .Padding {
            padding: 5px;
        }

        .ClassDiv {
            background-color: black;
            padding: 3px;
            border-radius: 8px;
        }
            .ClassDiv:hover {
                background-color:#ff6a00;
            }
    </style>

    <marquee onmouseover="this.stop()" padding="2px" onmouseout="this.start()" scrollamount="5" direction="left" scrolldelay="100">
    <span id="Main__lblError" class="label label-danger" style="background-color:Black;font-size:Larger;font-weight:bold;"></span>
        </marquee>
    <!-- //market-->
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-4">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-pencil"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4 style="text-align: center">Registered Units</h4>
                    <br />
                    <h3></h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-bag"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4 style="text-align: center">Attempted Units</h4>
                    <br />
                    <h3></h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4 style="text-align: center">Fee Payment</h4>
                    <p class="ClassDiv">
                        Total Billed = Ksh.<span id="Main__lblDR"></span><br />
                        Total Paid = Ksh.<span id="Main__lblCR"></span><br />
                        Fee Balance = Ksh.<span id="Main__lblBal"></span><br />
                        % Fee Paid =
                        <span id="Main__lblPercentage"></span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><i class="fa fa-user"></i>Basic information</div>
                    <div class="panel-body">
                        <div class="col-md-3 col-lg-3 marginbottom20" align="center">
                            
                            <img id="Main__ImgProfilePic" class="img-responsive img-75p" src="" style="height:100px;" />
                        </div>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Admission No</td>
                                    <td>
                                        <span id="Main__lblNo">EB1/28061/16</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Names</td>
                                    <td>
                                        <span id="Main__lblNames">JONATHAN SIOVI WANJALA</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">ID/ Passport</td>
                                    <td>
                                        <span id="Main__lblIDNo">33106479</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Gender</td>
                                    <td>
                                        <span id="Main__lblGender"></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Date of Birth</td>
                                    <td>
                                        <span id="Main__lblDOB">8/31/2016</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">County</td>
                                    <td>
                                        <span id="Main__lblCounty"></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Country</td>
                                    <td>
                                        <span id="Main__lblNationality">KENYAN</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Phone number</td>
                                    <td>
                                        <span id="Main__lblPhoneNo1">0718685292,0712847282</span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Postal code</td>
                                    <td>
                                        <span id="Main__lblPostCode"></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Email</td>
                                    <td>
                                        <span id="Main__lblEmail"></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">City</td>
                                    <td>
                                        <span id="Main__lblCity"></span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #000000;">Postal Address</td>
                                    <td>
                                        <span id="Main__lblPostalAddress">37632204003</span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Fax Number</td>
                                    <td>
                                        <span id="Main__lblFaxNo"></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Home Address</td>
                                    <td>
                                        <span id="Main__lblHomeAddress1"></span></td>
                                </tr>
                                <tr style="display: none">
                                    <td style="font-weight: bold; color: #000000;">Home page</td>
                                    <td>
                                        <span id="Main__lblHomePage"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><i class="fa fa-envelope"></i>Notifications</div>
                    <div class="panel-body">
                        <marquee onmouseover="this.stop()" height="300px" onmouseout="this.start()" scrollamount="5" direction="up" scrolldelay="100">
                                                           
                        <div class="notify-w3ls">
                            <div class="alert alert-info clearfix" >
                                <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender">
                                            
                                            <span><a href="#"><img src="Images/NEW2.gif" />
                                                
                                                <br /></a></span>  </li>
                                        <li class="pull-right notification-time"></li>
                                    </ul>
                                    <p>
                                      
                                    </p>
                                </div>
                            </div>
                        </div>
                                </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" name="ctl00$Main_$Button1" value="Update information" id="Main__Button1" class="btn btn-warning" />

                </section>
            </section>
            <!--main content end-->
        </section>
        <div class="footer navbar-fixed-bottom clearfix">
            <div class="wthree-copyright" style="text-align: center">
                <p>© 2019 Chuka University. All rights reserved | Design by <a href="dsl.ke">DSL Systems and Solutions LTD</a></p>
            </div>
        </div>
        <script src="Site/js/bootstrap.js"></script>
        <script src="Site/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="Site/js/scripts.js"></script>
        <script src="Site/js/jquery.slimscroll.js"></script>
        <script src="Site/js/jquery.nicescroll.js"></script>
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="Site/js/jquery.scrollTo.js"></script>

    </form>
</body>
</html>
