<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <title>Sistem Informasi Nomor Antrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
@if(Route::current()->uri == 'teller' || Route::current()->uri == 'cs')
<body class="w-full bg-center bg-repeat" style="background-image : url('images/bg.jpg');">
@else
<body class="w-full bg-center bg-repeat" style="background-image : url('../images/bg.jpg');">
@endif
    <div class="container w-full mx-auto pt-2">
        <nav class="flex bg-base-100 justify-between p-3 rounded-xl shadow-xl">
            <div class="">
                <a class="btn btn-ghost normal-case text-xl">
                    <img class="h-8" src="{{asset('images/logo.png')}}" alt="Logo Bank Syariah Mandiri">
                </a>
            </div>
            @include('template.sidebar.sidebar_main')
        </nav>

        <div class="card lg:card-side bg-base-100 shadow-xl p-5 my-5 justify-center">
            @yield('content')
        </div>

        <footer class="flex p-3 bg-base-100 rounded-xl shadow-xl">
            <div class="items-center grid-flow-col flex">
                <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg> 
                <p>&nbsp;Copyright © 2022 - All right reserved</p>
            </div>
        </footer>
    </div>
</body>






{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  @stack('antreanAutoReload')
  <title>SIINNA (Sistem Informasi Nomor Antrean)</title>
  <link rel="icon" href="https://www.bankbsi.co.id/img/favicon.png">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('public/css/fonts_googleapis.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="{{ url('public/plugins/fontawesome-free/css/all.min.css')}}"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="{{ url('public/dist/css/adminlte.min.css')}}"> -->

   <!-- DataTables -->
  <!-- <link rel="stylesheet" href="{{ url('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{ url('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"> -->

    <!-- Select2 -->
  <!-- <link rel="stylesheet" href="{{ url('public/plugins/select2/css/select2.min.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{ url('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> -->
<!-- font-awesome -->
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
</head>
<body class="w-full h-fit bg-cover" style="background-image : url('https://storage.googleapis.com/sinna/bg-base.jpg')">

<nav class="w-full bg-white drop-shadow-md">
  <div class="flex max-w-6xl mx-auto justify-between">
    <div class="p-2"><img class="w-48 " src="{{url('public')}}/assets/logo.png"></div>
    <div class="flex place-items-center">
      @include('template.sidebar.sidebar_main')
    </div>
  </div>
</nav>
  <!-- <div class="wrapper"> -->
  <!-- Navbar -->
    <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
  	<!-- include('admin.template.section.header') -->
  	<!-- include('admin.template.section.rightnavbar') -->
    <!-- </nav> -->
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper"> -->
      <!-- <div class="container"> -->
        <!-- <div class="row"> -->
          <!-- <div class="col-md-12"> -->
            <!-- @include('template.utils.notif') -->
          <!-- </div>
        </div>
      </div>-->
  <div class="bg-white m-10 p-10 rounded-xl drop-shadow-md">
  	@yield('content')
  </div>
    <!-- </div>  -->
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark"> -->
      <!-- Control sidebar content goes here -->
      <!-- <div class="p-3"> -->
        <!-- <h5>Title</h5> -->
        <!-- <p>Sidebar content</p> -->
      <!-- </div> -->
    <!-- </aside> -->
    <!-- /.control-sidebar -->
    <!-- Main Footer -->
    <!-- <footer class="main-footer"> -->
      <!-- To the right -->
      <!-- <div class="float-right d-none d-sm-inline"> -->
        <!-- Anything you want -->
      <!-- </div> -->
      <!-- Default to the left -->
      <!-- <strong>Copyright &copy; 2020 @if(date("Y") > '2020') - {{date("Y")}} @endif <a href="#">SIINNA</a>.</strong> All rights reserved. -->
    <!-- </footer> -->
<!-- </div> -->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!-- <script src="{{ url('public/plugins/jquery/jquery.min.js') }}"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->

<!-- DataTables -->
<!-- <script src="{{ url('public/plugins/datatables/jquery.dataTables.min.js') }}"></script> -->
<!-- <script src="{{ url('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script> -->
<!-- <script src="{{ url('public/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script> -->
<!-- <script src="{{ url('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script> -->
<!-- AdminLTE App -->
<!-- <script src="{{ url('public/dist/js/adminlte.min.js') }}"></script> -->
<!-- Select2 -->
<!-- <script src="{{ url('public/plugins/select2/js/select2.full.min.js') }}"></script> -->
<!-- Bootstrap Switch -->
<!-- <script src="{{ url('public/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script> -->

<!-- <script>
	$(".table-datatable").DataTable();
	  $(function () {
	    $('.select2').select2()
	    $('.select2bs4').select2({
	      theme: 'bootstrap4'
	    })
	    $("input[data-bootstrap-switch]").each(function(){
	      $(this).bootstrapSwitch('state', $(this).prop('checked'));
	    });
	  })
</script> -->
  @stack('jumlah-antrian')
</body>
</html> --}}
