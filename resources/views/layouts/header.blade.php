<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>PrintIT</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="PrintIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="{{asset('img/printit.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700,800,900" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/v-nav-menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/v-animation.css')}}" rel="stylesheet" />
    <link href="{{asset('css/v-bg-stylish.css')}}" rel="stylesheet" />
    <link href="{{asset('css/v-shortcodes.css')}}" rel="stylesheet" />
    <link href="{{asset('css/theme-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

    <!-- Current Page CSS -->
    <link href="{{asset('plugins/rs-plugin/css/settings.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/rs-plugin/css/custom-captions.css')}}" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body class="no-page-top">

    <!--Header-->
    <!--Set your own background color to the header-->
    <header>
        <div class="container">
            <!--Site Logo-->
            <div class="logo" data-sticky-logo="{{asset('img/logo-white.png')}}" data-normal-logo="{{asset('img/logo-white.png')}}">
                <a href="{{route('welcome')}}">
                    <img alt="Venue" src="{{asset('img/logo.png')}}" data-logo-height="35">
                </a>
            </div>
            <!--End Site Logo-->

            <div class="navbar-collapse nav-main-collapse collapse">

                <!--Main Menu-->
                <nav class="nav-main mega-menu one-page-menu">
                    <ul class="nav nav-pills nav-main" id="mainMenu">
                        <li>
                            <a data-hash href="{{route('welcome')}}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        @if(Auth::check())
                        <li>
                            <a data-hash href="{{route('home')}}"><i class="fa fa-download"></i>Dashboard</a>
                        </li>
                        @endif
                        <li>
                            <a data-hash href="{{route('users')}}"><i class="fa fa-location-arrow"></i>Users</a>
                        </li>
                        @if(!Auth::check())
                        <li>
                            <a data-hash href="{{route('login')}}"><i class="fa fa-laptop"></i>Login</a>
                        </li>
                        @endif
                        @if(!Auth::check())
                        <li>
                            <a data-hash href="{{route('register')}}"><i class="fa fa-download"></i>Register</a>
                        </li>
                        @endif
                        @if(Auth::check())
                        <li>
                            <a data-hash href="{{route('logout')}}"><i class="fa fa-download"></i>Logout</a>
                        </li>
                        @endif

                    </ul>
                </nav>
                <!--End Main Menu-->
            </div>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </header>
    <!--End Header-->