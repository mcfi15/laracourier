<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/" class="text-nowrap logo-img">
          <img src="{{ asset('uploads/logo/'.$appSetting->logo) }}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/dashboard" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">BRANCH</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/branch" aria-expanded="false">
              <span>
                <i class="ti ti-building"></i>
              </span>
              <span class="hide-menu">List</span>
            </a>
          </li>

          
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Parcel</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/parcel" aria-expanded="false">
              <span>
                <i class="ti ti-users"></i>
              </span>
              <span class="hide-menu">List</span>
            </a>
          </li>
          
          
          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/slider" aria-expanded="false">
              <span>
                <i class="ti ti-camera"></i>
              </span>
              <span class="hide-menu">Slider</span>
            </a>
          </li> --}}

          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">AUTH</span>
          </li>
          
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/settings" aria-expanded="false">
              <span>
                <i class="ti ti-settings"></i>
              </span>
              <span class="hide-menu">Settings</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <span>
                <i class="ti ti-logout"></i>
              </span>
              <span class="hide-menu">{{ __('Logout') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
        
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>