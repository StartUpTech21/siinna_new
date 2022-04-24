@php
  function checkrouteactive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{url('index')}}" class="brand-link">
    <!-- <img src="{{url('public')}}/img/favicon.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <!-- <span class="brand-text font-weight-light">Alat Kopi</span> -->
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        
      </div>
      <div class="info">
        <a href="#" class="d-block">
         {{request()->user()->username}}
        </a>
      </div>
    </div>
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="{{url('superadmin')}}" class="nav-link {{checkRouteActive('superadmin')}}">
            <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('superadmin/user')}}" class="nav-link {{checkRouteActive('superadmin/user')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('superadmin/tempat')}}" class="nav-link {{checkRouteActive('superadmin/tempat')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tempat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link {{checkRouteActive('user')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
