

<!-- layout-wrapper -->
<div class="layout-wrapper">
  <!-- header -->
  <div class="header">


    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">

            <li class="nav-item ms-3">

                    <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div>
                    @if(Auth::check())
                    <div class="fw-bold">{{ Auth::user()->first_name }}</div>
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
        
                <a href="{{ route('admin.auth.logout') }}" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
            </li>
        </ul>
    </div>

</div>
    <!-- ./ header -->
