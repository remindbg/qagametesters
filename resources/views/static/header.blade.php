<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130582519-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130582519-1');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('metas')


    <!-- vendor css -->
    <link href="{{asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/azia.css')}}">

</head>
<body class="az-dashboard">

<div class="az-header">
    <div class="container">
        <div class="az-header-left">
            <a href="/" class="az-logo">QA<span>Game</span>Testers</a>
            <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
        </div><!-- az-header-center -->
        <div class="az-header-right">

            @auth
                <div class="dropdown az-header-notification">
                    <a href="" class="new"><i class="typcn typcn-user-add"></i></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">

                            <h6>{{auth()->user()->name}}</h6>
                            <span>Account Pending*</span>
                        </div><!-- az-header-profile -->

                        <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Game Activity Logs</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                    </div>
                </div>
            @endauth

            @guest
                <div class="dropdown az-header-notification">
                    <a href="" class="new"><i class="typcn typcn-user-add"></i></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <a href="/register" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Register</a>
                        <a href="/login" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Login</a>
                    </div><!-- dropdown-menu -->
                </div>
            @endguest


        </div><!-- az-header-right -->
    </div><!-- container -->
</div><!-- az-header -->

<div class="az-navbar">
    <div class="container">
        <div><a href="index.html" class="az-logo">QA<span>Game</span>Testers</a></div>
        <div class="az-navbar-search">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search "></i></button>
        </div><!-- az-navbar-search -->
        <ul class="nav">
            <li class="nav-label">Main Menu</li>
            <li class="nav-item active show">
                <a href="/" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
                <nav class="nav-sub">
                    <a href="/" class="nav-sub-link active">Homepage</a>
                    <a href="portal/qa/" class="nav-sub-link">QA Portal</a>
                    <a href="portal/dashboard" class="nav-sub-link">Portal Dashboard</a>

                </nav>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-bell"></i>Games</a>
                <nav class="nav-sub">
                    @foreach ($games as $game)
                        <a href="{{route('fgame.single',[$game->id,$game->slug])}}" class="nav-sub-link">{{$game->name}}</a>
                    @endforeach
                </nav>
            </li><!-- nav-item -->

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-compass"></i>For Companies</a>
                <nav class="nav-sub">
                    <a href="/portal/companies/login" class="nav-sub-link">Login</a>
                </nav>
            </li><!-- nav-item -->

        </ul><!-- nav -->
    </div><!-- container -->
</div>