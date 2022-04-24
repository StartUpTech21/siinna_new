@php
  function checkrouteactive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp

<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="{{url('cs/')}}" class="px-4 {{checkRouteActive('beranda')}}"><i><p>Beranda</p></i></a>
</div>
<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="{{url('cs/antrean')}}" class="px-4 {{checkRouteActive('beranda')}}"><i><p>Nomor Antrean</p></i></a>
</div>
<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="{{url('cs/laporan')}}" class="px-4 {{checkRouteActive('beranda')}}"><i><p>Laporan</p></i></a>
</div>
<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="{{url('logout')}}" class="px-4 {{checkRouteActive('beranda')}}"><i><p>Logout</p></i></a>
</div>
