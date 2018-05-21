<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
	<title>Document</title>

    {!!Charts::assets()!!}
</head>

<body >
    <!-- nav bara start -->
<!-- nav bara start -->
        <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{asset('Assets/icon.png')}}"  width="30" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                
                        <ul class="navbar-nav mr-auto">
                             
                            @if (Route::has('login'))
                            
                                @if (Auth::check())
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link "href="{{ url('/register') }}">Register</a>
                                    </li>
                                @endif
                            @endif

                            <Li class="nav-item">
                            
                            </Li>

                        </ul>
                        <!-- Right Side Of Navbar -->
                    
                  

            </div>
        </nav>
        <!-- nav bar end  -->




     <!-- <div id="app">

        <div class="top_nav">
          <div class="nav_menu">
            <nav>

                <div class="navbar-header" style="color:#344535E; background:#EDEDED ">
                   
                        
                     
                    <a class="navbar-brand" style="color: #337ab7 !important" href="{{ url('/') }}">
                        {{ config('app.name', 'RADgreen') }}
                    </a>
                </div>

                 <ul class="nav navbar-nav">
                        &nbsp;
                </ul>

                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out pull-right"></i>  Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>
                        @endif
                    </ul>
            </nav>

          </div>
        </div> -->
        
       
        @yield('content')

    <!-- footer -->
       <footer style="padding: 10px; position: fixed; bottom: 0px;height: 50px;width: 100%;color:gray; font-family: Aller Light;font-size: 10px" class="footer bg-light text-center ">
	        © 2018  RAD Green 
        </footer>
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <!-- end footer -->


   
</body>
</html>
