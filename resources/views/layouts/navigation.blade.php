<nav class="navbar navbar-expand-lg nav-bg">
    <div style="margin-left:10px;">
        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" srcset="" width="80px" height="80px"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end me-2" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'about-us' ? 'inThatPage' : ''}}" href="{{ route('about-us') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'contact-us' ? 'inThatPage' : ''}}" href="{{ route('contact-us') }}">Contact Us</a>
            </li>
            @if(Auth::check())    
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'inThatPage' : ''}}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                        {{-- <a class="nav-link" href="{{ route('logout') }}">Logout</a> --}}
                        <a class="nav-link" id="logout" style="cursor: pointer;">Logout</a>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
