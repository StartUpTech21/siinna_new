@php
  function checkrouteactive($route){
    if(Route::current()->uri == $route) return 'bg-[#F9AD3C] text-white ';
  }
@endphp
<nav class="flex items-center">
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md {{checkRouteActive('cs')}}">
    <a href="{{url('cs/')}}"><i><p>Beranda</p></i></a>
  </div>
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md {{checkRouteActive('cs/antrean')}}">
    <a href="{{url('cs/antrean')}}"><i><p>Nomor Antrean</p></i></a>
  </div>
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md">
    <a href="{{url('logout')}}" class="{{checkRouteActive('/logout')}}"><i><p>Logout</p></i></a>
  </div>
</nav>
