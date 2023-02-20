

<!-- START HEADER -->
<header class="header_wrap dark_skin main_menu_uppercase">


    <div class="container">
        <nav class="navbar navbar-expand-lg">
        @if(Auth::check())
            <li><a href="#"><i class="ti-user"></i> <span>{{ Auth::user()->first_name }}</span></a></li>
         @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
                    <li>
                        <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                    </li>

                    @if(Auth::check())
                    <li>
                        <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ route('user.logout') }}">Logout</a>
                    </li>
                    @else 
                    
                    <li>
                        <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ route('user.login') }}">Login</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ route('user.register') }}">Register</a>
                    </li>
                    @endif

                </ul>
            </div>

        </nav>
    </div>
</header>

