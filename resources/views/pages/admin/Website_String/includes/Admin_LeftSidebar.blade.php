<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="user-avatar lg-avatar mr-4">
            <img src="{{asset('img/avatar.jpg') }}" class="card-img-top rounded-circle border-white" alt="{{ Auth::user()->name }}">
          </div>
          <div class="d-block">
            <h2 class="h6">Hi, {{ Auth::user()->name }}</h2>
            <a href="{{url('auth/logout')}}" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                aria-label="Toggle navigation"></a>
        </div>
      </div>
      <ul class="nav flex-column">
        <li  class="{{ Request::is('auth/dashboard') ? 'nav-item active' : '' }}"  >
          <a href="{{url('auth/dashboard')}}" class="nav-link">
            <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="{{ Request::is('auth/dashboard/languages') ? 'nav-item active' : '' }}">
          <a href="{{route('admin.languages')}}" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-globe"></span></span>
              <span>Site languages</span>
          </a>
        </li>
        <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-pages">
            <span>
              <span class="sidebar-icon"><span class="far fa-file-alt"></span></span> 
              Website String
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="{{ Request::is('auth/dashboard/admin') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{url('/auth/dashboard/admin')}}"><span class="fas fa-user">  Admin information </span></a></li>
                  <li class="{{ Request::is('auth/dashboard/ervaring') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{route('admin.experience.index')}}"><span class="far fa-file-alt">  Experience </span></a></li>
                  <li class="{{ Request::is('auth/dashboard/opleiding') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{url('/auth/dashboard/opleiding')}}"><span class="fas fa-graduation-cap">  Education </span></a></li>
                  <li class="{{ Request::is('auth/dashboard/watikdoe') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{url('/auth/dashboard/watikdoe')}}"><span class="	fa fa-american-sign-language-interpreting"> What I do</span></a></li>
                  <li class="{{ Request::is('auth/dashboard/hobbys') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{route('admin.hobbys.index')}}"><span class="fa fa-cubes"> Hobbies</span></a></li>
                  <li class="{{ Request::is('auth/dashboard/sociaal_contact') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{url('/auth/dashboard/sociaal_contact')}}"><span class="fa fa-globe "> Social contact</span></a></li>
              </ul>
          </div>
        </li>
        <li class="{{ Request::is('auth/dashboard/contact') ? 'nav-item active' : '' }}">
          <a href="{{url('/auth/dashboard/contact')}}" class="nav-link">
              <span class="sidebar-icon"><span class="fa fa-envelope"></span></span>
              <span>Contact</span>
          </a>
        </li>
          
        <li class="nav-item {{ Request::is('auth/dashboard/users') ? 'nav-item active' : '' }}">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-Settings">
            <span>
              <span class="sidebar-icon"><span class="fa fa-users"></span></span> 
              User Management
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse" role="list" id="submenu-Settings" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="{{ Request::is('auth/dashboard/users') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{route('auth.dashboard.users')}}"><span class="fa fa-users">  All Users </span></a></li>
                  <li class="{{ Request::is('auth/dashboard/roles') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{route('auth.dashboard.roles')}}"><span class="fa fa-briefcase">     Roles </span></a></li>
                  <li class="{{ Request::is('auth/dashboard/permission') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{route('auth.dashboard.permission')}}"><span class="fa fa-cog">   Permissions </span></a></li>
              </ul>
          </div>
        </li>
        
        <li class="{{ Request::is('auth/dashboard/profile') ? 'nav-item active' : '' }}">
          <a href="{{url('/auth/dashboard/profile')}}" class="nav-link">
              <span class="sidebar-icon"><span class="far fa-user-circle"></span></span>
              <span>My Profile</span>
          </a>
        </li>
        <li class="{{ Request::is('auth/dashboard/calendar') ? 'nav-item active' : '' }}">
          <a href="{{URL('/auth/dashboard/calendar')}}" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-calendar-alt"></span></span>
              <span>Calendar</span>
          </a>
        </li>
 
        <li class="nav-item {{ Request::is('auth/dashboard/projects') ? 'nav-item active' : '' }}">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-Projects">
            <span>
              <span class="sidebar-icon"><span class="fab fa-r-project"></span></span> 
              Projects
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse " role="list" id="submenu-Projects" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="{{ Request::is('auth/dashboard/projects') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{url('/auth/dashboard/projects')}}"><span class="fa fa-users">  All Projects </span></a></li>
                  <li class="{{ Request::is('auth/dashboard/category') ? 'nav-item active' : '' }}"><a class="nav-link" href="{{url('/auth/dashboard/category')}}"><span class="fa fa-briefcase">  Category </span></a></li>
              </ul>
          </div>
        </li>
        <!-- <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app">
            <span>
              <span class="sidebar-icon"><span class="fas fa-table"></span></span> 
              Tables
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="nav-item "><a class="nav-link" href="../../pages/tables/bootstrap-tables.html"><span>Bootstrap Tables</span></a></li>
              </ul>
          </div>
        </li> -->
        <!-- <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-pages">
            <span>
              <span class="sidebar-icon"><span class="far fa-file-alt"></span></span> 
              Page examples
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="nav-item"><a class="nav-link" href="../../pages/examples/sign-in.html"><span>Sign In</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/examples/sign-up.html"><span>Sign Up</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/examples/forgot-password.html"><span>Forgot password</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/examples/reset-password.html"><span>Reset password</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/examples/lock.html"><span>Lock</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/examples/404.html"><span>404 Not Found</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/examples/500.html"><span>500 Server Error</span></a></li>
              </ul>
          </div>
        </li> -->
        <!-- <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-components">
            <span>
              <span class="sidebar-icon"><span class="fas fa-box-open"></span></span> 
              Components
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse " role="list" id="submenu-components" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="nav-item "><a class="nav-link" href="../../pages/components/buttons.html"><span>Buttons</span></a></li>
                  <li class="nav-item "><a class="nav-link" href="../../pages/components/notifications.html"><span>Notifications</span></a></li>
                  <li class="nav-item "><a class="nav-link" href="../../pages/components/forms.html"><span>Forms</span></a></li>
                  <li class="nav-item "><a class="nav-link" href="../../pages/components/modals.html"><span>Modals</span></a></li>
                  <li class="nav-item "><a class="nav-link" href="../../pages/components/typography.html"><span>Typography</span></a></li>
              </ul>
          </div>
        </li> -->
        <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
        <!-- <li class="nav-item">
          <a href="../../index.html" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="{{asset('img/admin/logo_site.png')}}" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1">Volt Overview</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="{{url('categorys')}}" target="_blank" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon"><span class="fas fa-book"></span></span>
            <span>Quick Start</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="https://www.sadour.nl" target="_blank" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon"><span class="fas fa-rocket"></span></span>
            <span>Upgrade to Pro</span>
          </a>
        </li>  -->
        <li class="nav-item">
          <a href="{{url('sadour')}}" target="_blank" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="{{asset('img/admin/logo_site.png')}}" height="20" width="20" alt="Themesberg Logo">
            </span>
            <span>Ibrahim Sadour</span>
          </a>
        </li>
      </ul>
    </div>
</nav>