@php
  function checkrouteactive($route){
    if(Route::current()->uri == $route) return 'bg-[#F9AD3C] text-white ';
  }
@endphp
<nav class="flex items-center">
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md {{checkRouteActive('teller')}}">
    <a href="{{url('teller/')}}"><i><p>Beranda</p></i></a>
  </div>
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md {{checkRouteActive('teller/antrean')}}">
    <a href="{{url('teller/antrean')}}"><i><p>Nomor Antrean</p></i></a>
  </div>
  <div class="px-3 py-2 mx-2 btn-ghost rounded-md">
    <a href="{{url('logout')}}" class="{{checkRouteActive('/logout')}}"><i><p>Logout</p></i></a>
  </div>
</nav>
