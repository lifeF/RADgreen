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
                                <a href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            </li>
                        @endif
                    @endif
                </ul>

            </div>
        </nav>
        <!-- nav bar end  -->

        <!-- welcome message -->
        <div style="padding-top:10% ;height: 20% ;border-radius: 10px " class="container-fluid">
            <div style="padding: 6%;opacity: 0.7"  class=" bg-light">
                <center> <img src="Assets/icon.png" width="10%"  alt=""></center>
                <p style="color:green;font-size: 60px;font-family: Aller Light;margin-bottom: 0px;padding-bottom: 0px"> Welcome to your GreenWorld</p>
                <p style="color:gray; font-family: Aller Light"><i>“Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth,<br> good morals, and happiness.”</i> </p>
                <center>
                <div class="btn-group" style="color:gray; font-family: Aller Light" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">About</button>
                    <button type="button" class="btn btn-success">VISIT</button>
                    <button type="button" class="btn btn-secondary">Help</button>
                </div>
                </center>
            </div>	
        </div>
        <!-- end welcome message -->

        















       
    </body>
</html>
