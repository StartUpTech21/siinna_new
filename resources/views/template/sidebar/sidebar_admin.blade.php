@php
  function checkrouteactive($route){
    if(Route::current()->uri == $route) return 'bg-[#F9AD3C] text-white ';
  }
@endphp

<nav class="flex items-center">
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md {{checkRouteActive('admin')}}">
    <a href="{{url('admin/')}}"><i><p>Beranda</p></i></a>
  </div>
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md {{checkRouteActive('admin/user')}}">
    <a href="{{url('admin/user')}}"><i><p>User</p></i></a>
  </div>
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md">
    <a href="{{url('logout')}}" class="{{checkRouteActive('/logout')}}"><i><p>Logout</p></i></a>
  </div>
</nav>