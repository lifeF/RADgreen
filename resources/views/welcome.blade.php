<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
        <title>Welcome to Your Green Life</title>
    </head>
    <body style="background: url('{{asset('Assets/back.png')}}') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;">

        <!-- nav bara start -->
        <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{asset('Assets/icon.png')}}" width="30" height="30" alt="">
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
                </ul>

            </div>
        </nav>
        <!-- nav bar end  -->

        <!-- welcome message -->
        <div style="padding-top:8% ;height: 20% ;border-radius: 10px " class="container-fluid">
            <div style="padding: 6%;opacity: 0.7"  class=" bg-light">
                <center> <img src="Assets/icon.png" width="10%"  alt=""></center>
                <p style="color:green;font-size: 60px;font-family: Aller Light;margin-bottom: 0px;padding-bottom: 0px"> Welcome to your GreenWorld</p>
                <p style="color:gray; font-family: Aller Light"><i>“Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth,<br> good morals, and happiness.”</i> </p>
                <center>
                <div class="btn-group" style="color:gray; font-family: Aller Light" role="group" aria-label="Basic example">
                     @if (Route::has('login'))
                        @if (Auth::check())
                            <a type="button" class="btn btn-success"   href="{{ url('/home') }}">VISIT</a>
                        @else
                            <a type="button" class="btn btn-secondary" href="{{ url('/register') }}">Register</a>
                            <a type="button" class="btn btn-secondary" href="{{ url('/login') }}">Login</a>
                        @endif
                    @endif
                </div>
                </center>
            </div>	
        </div>
        <!-- end welcome message -->

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
