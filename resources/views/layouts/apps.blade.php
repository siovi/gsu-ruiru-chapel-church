<!DOCTYPE html>

    <title>Ruiru Charpel Church</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{--<link href="asset('font-awesome/css/font-awesome.css')" rel="stylesheet">--}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    
</head>
<body id="app-layout">
    <nav class="navbar  navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
               <a class="navbar-brand" href="{{ url('/welcome') }}" style="color: #cc0000; font-weight:bold;">
                    Home
                </a>
                 
                <!--a class="navbar-brand" href="{{url('/activity')}}" style="color: green; font-weight:bold; font-size: " >Dashboard</a-->
               

            </div>

            <div class="collapse navbar-collapse " id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                   
                    <li><a href="{{ url('/home') }}">Posts</a></li>
                    @if (\Auth::user()->isadmin()==1)
                    <li><a href="{{url('/post')}}">Add Post</a></li>
                    <!--li><a href="{{ url('/category') }}"><i class=""></i>Minitry</a></li>
                      @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                            <li><a href="{{ url('/category') }}"><i class=""></i>Add Category</a></li>             
                    @endif
                    <li><a href="{{ url('/profile') }}"><i class=""></i>Add Profile</a></li>
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links >
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        
                    @else
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

                            
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav-->
    <li id="dropdown-user" class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="ic-user pull-right">
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<!--You can use an image instead of an icon.-->
									<!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<i class="fa fa-user"> Hello {{\Auth::user()->branchname}}</i>
								</span>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--You can also display a user name in the navbar.-->
								<!--<div class="username hidden-xs">Aaron Chavez</div>-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							</a>
							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
								<ul class="head-list">
									<li>
	                  <form method="POST" action="{{route('logout')}}">
	                  @csrf
	                  <button type="submit"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</button>
	                  </form>
									</li>
								</ul>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End user dropdown-->
					</ul>
				</div>
				<!--================================-->
				<!--End Navbar Dropdown-->
			</div>
            
            </nav>
		</header>
        
        

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    

</body>

</html>
    

