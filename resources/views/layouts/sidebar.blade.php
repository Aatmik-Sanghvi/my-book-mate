<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Book Mate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dynamicPart/css/dashboard.css') }}">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ route('dashboard') }}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">My Book Mate</span> </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
                            class="nav_name">Dashboard</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-search nav_icon'></i> <span
                            class="nav_name">Find books</span></a>
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                            class="nav_name">My Inbox</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                            class="nav_name">Users</span> </a>
                    {{-- <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
                            class="nav_name">Messages</span></a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">Stats</span> </a> --}}
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                {{-- <a class="nav-link" href="{{ route('logout') }}">Logout</a> --}}
                {{-- <a class="nav-link" id="logout" class="nav_link" style="cursor: pointer;">Logout</a> --}}
                <a class="nav_link" id="logout"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name" style="cursor: pointer;">Log Out</span> </a>
            </form>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        @yield('main-dashboard-component')
    </div>
    <!--Container Main end-->
    @include("layouts.js")
</body>
</html>
