<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('patient.dashboard')}}" class="brand-link d-flex align-items-center">
        <div class="brand-logo-circle elevation-3">
            <img src="{{ asset('assets/logo/MTN3.png') }}" alt="Logo">
        </div>
        <span class="brand-text font-weight-light">{{ ucfirst($panel)." Panel" }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="{{ route('patient.profile.edit') }}"> 
                    @if(!empty(Auth::user()->profile_image))
                        <img src="{{ asset('profile_images/patients/'.Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image">
                    @else
                        <img src="{{ asset('frontend/img/sldr.jpg') }}" alt="">
                    @endif
                </a>
            </div>
            <div class="info">
                <a href="{{ route('patient.profile.edit')}}" class="d-block">Hello, {{ ucfirst(Auth::user()->user_name) }}!</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('patient.dashboard')}}" class="nav-link {{ ($page_name == 'dashboard' )? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ ($main_menu == 'profile' ) ? 'menu-open' : ''}} ">
                    <a href="#" class="nav-link {{ ($main_menu == 'profile' )? 'active' : ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('patient.profile.edit')}}"
                                class="nav-link {{ ($page_name == 'edit_profile' ) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Edit Profile') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ ($main_menu == 'bookings' ) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ($main_menu == 'bookings' )? 'active' : ''}}">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Bookings
                            <i class="right fas fa-angle-left"></i>
                            @if($booking_notification)
                            <span class="right badge badge-danger">{{$booking_notification}} New</span>
                            @endif
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('patient.bookings.history')}}"
                                class="nav-link {{ ($page_name == 'booking_history' )? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking History</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('patient.bookings.upcoming')}}"
                                class="nav-link {{ ($page_name == 'upcoming_bookings' )? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Upcoming Bookings</p>
                                @if($booking_notification)
                                    <span class="right badge badge-danger ml-2"> 
                                          <small>{{$booking_notification}} New</small>
                                     </span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
							<a href="{{ route('patient.bookings.cancelled') }}" class="nav-link {{ ($page_name == 'booking_cancelled' )? 'active' : ''}}">
								<i class="far fa-circle nav-icon"></i>
								<p>Cancelled Booking </p>
							</a>
						</li>
                    </ul>
                </li>
                <li class="nav-item {{ ($main_menu == 'payment_history' ) ? 'menu-open' : '' }}">
                    <a href="{{ route('patient.payment_history')}}" class="nav-link {{ ($page_name == 'payment_history' )? 'active' : ''}}">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Payment History
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ ($main_menu == 'faqs' ) ? 'menu-open' : '' }}">
                    <a href="{{ route('patient.faqs')}}" class="nav-link {{ ($page_name == 'faqs' ) ? 'active' : ''}}">
                        <i class="nav-icon fa fa-question-circle"></i>
                        <p>
                            Faqs
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>