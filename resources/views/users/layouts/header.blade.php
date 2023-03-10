<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            @if(Auth::user()->picture != "" && Auth::user()->picture != "NULL")
                            <span class="avatar avatar-online"><img src="{{ asset('profile_images/customers/'.Auth::user()->picture) }}" alt="avatar"></span></a>
                        @else
                        <span class="avatar avatar-online"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"></span></a>
                        @endif
                        <div class="dropdown-menu dropdown-menu-right profile-width">
                            <div class="arrow_box_right">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <span class="avatar avatar-online avtar-custom">
                                        @if(Auth::user()->picture != "" && Auth::user()->picture != "NULL")
                                            <img src="{{asset('profile_images/customers/'.Auth::user()->picture) }}" alt="avatar">
                                        @else
                                            <img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar">
                                        @endif
                                    </span>
                                    <span class="user-name text-bold-700 ml-1">{{ Auth::user()->username }}</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('customer.profile.edit')}}"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="{{route('customer.profile.change_password')}}"><i class="ft-lock"></i> Change Password</a>
                                <a class="dropdown-item" href="{{ route('customer.logout') }}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->