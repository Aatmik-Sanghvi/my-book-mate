<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Book Mate</title>
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.responsive.datatable.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_api.api_key') }}&loading=async&libraries=places"></script>
</head>

<body id="body-pd" class="body-pd">
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
        <div class="header_img"> <a href="{{ route('profile.edit') }}"> <img src="https://wallpapers.com/images/hd/hulk-giga-chad-kitllbmowcod6hup.jpg" alt="no-image"> </a> </div>
    </header>
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ route('dashboard') }}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">My Book Mate</span> </a>
                <div class="nav_list">
                    <a href="{{ route('dashboard') }}" class="nav_link @if (Route::currentRouteName() == 'dashboard') active @endif">
                        <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="{{ route('ask-ai') }}" class="nav_link @if (Route::currentRouteName() == 'ask-ai') active @endif">
                        <i class='bx bx-search nav_icon'></i> <span class="nav_name">Ask AI</span></a>
                    <a href="{{ route('all-books') }}" class="nav_link @if (Route::currentRouteName() == 'all-books') active @endif"> 
                        {{-- <img src="{{ asset('assets/images/bookshelf.png') }}" class="pngToWhite" alt="bookShelf" width="20px" height="20px">  --}}
                        <i class="fa-solid fa-table-list"></i>
                        <span class="nav_name">All books</span></a>
                    {{-- <a href="{{ route('add-book') }}" class="nav_link @if (Route::currentRouteName() == 'add-book') active @endif"> <i class='bx bx-book-add nav-icon'></i> <span
                            class="nav_name">Add books</span></a> --}}
                    <a href="{{ route('my-books') }}" class="nav_link @if (Route::currentRouteName() == 'my-books' ||
                            Route::currentRouteName() == 'view-books' ||
                            Route::currentRouteName() == 'add-books' ||
                            Route::currentRouteName() == 'edit-books') active @endif">
                        <i class="fa-solid fa-book"></i> <span class="nav_name">My Books</span> </a>
                    <a href="{{ route('profile.edit') }}"
                        class="nav_link @if (Route::currentRouteName() == 'profile.edit') active @endif">
                        <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a>
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
                <a class="nav_link" id="logout"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name"
                        style="cursor: pointer;">Log Out</span> </a>
            </form>
        </nav>
    </div>
    <!--Container Main start-->
    {{-- <div style="position:absolute;"> --}}
    @yield('main-dashboard-component')
    {{-- </div> --}}
    <!--Container Main end-->
    @include('layouts.js')
</body>
<script>
    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @elseif (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @elseif (Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
</script>

</html>
