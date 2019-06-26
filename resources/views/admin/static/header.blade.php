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

    <!-- Twitter -->

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>Admin Panel</title>

    <!-- vendor css -->
    <link href="{{asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/azia.css')}}">

</head>
<body class="az-dashboard">

<div class="az-header">
    <div class="container">
        <div class="az-header-left">
            <a href="/" class="az-logo">QA<span>Game</span>Testers</a>
            <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div>
    </div>
</div>

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
                <a href="corporate/" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>

            </li>

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-bell"></i>Games</a>
                <nav class="nav-sub">
                    <a href="{{route('games.index')}}" class="nav-sub-link">All Games</a>
                    <a href="{{route('games.create')}}" class="nav-sub-link">Add Game</a>

                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-bell"></i>Messages</a>
                <nav class="nav-sub">
                    <a href="{{route('messages.index')}}" class="nav-sub-link">All Messages</a>

                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-user-add"></i>Users</a>
                <nav class="nav-sub">
                    <a href="{{route('users.index')}}" class="nav-sub-link">All Users</a>

                </nav>
            </li>
        </ul>
    </div>
</div>