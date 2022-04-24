<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php echo $__env->yieldPushContent('antreanAutoReload'); ?>
  <title>SIINNA (Sistem Informasi Nomor Antrean)</title>
  <link rel="icon" href="https://www.bankbsi.co.id/img/favicon.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?php echo e(url('public/css/fonts_googleapis.css')); ?>">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="<?php echo e(url('public/plugins/fontawesome-free/css/all.min.css')); ?>"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo e(url('public/dist/css/adminlte.min.css')); ?>"> -->

   <!-- DataTables -->
  <!-- <link rel="stylesheet" href="<?php echo e(url('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>"> -->
  <!-- <link rel="stylesheet" href="<?php echo e(url('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>"> -->

    <!-- Select2 -->
  <!-- <link rel="stylesheet" href="<?php echo e(url('public/plugins/select2/css/select2.min.css')); ?>"> -->
  <!-- <link rel="stylesheet" href="<?php echo e(url('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>"> -->
<!-- font-awesome -->
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
</head>
<body class="w-full h-fit bg-cover" style="background-image : url('https://storage.googleapis.com/sinna/bg-base.jpg')">

<nav class="w-full bg-white drop-shadow-md">
  <div class="flex max-w-6xl mx-auto justify-between">
    <div class="p-2"><img class="w-48 " src="<?php echo e(url('public')); ?>/assets/logo.png"></div>
    <div class="flex place-items-center">
      <?php echo $__env->make('template.sidebar.sidebar_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <!-- <?php echo $__env->make('template.utils.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
          <!-- </div>
        </div>
      </div>-->
  <div class="bg-white m-10 p-10 rounded-xl drop-shadow-md">
  	<?php echo $__env->yieldContent('content'); ?>
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
      <!-- <strong>Copyright &copy; 2020 <?php if(date("Y") > '2020'): ?> - <?php echo e(date("Y")); ?> <?php endif; ?> <a href="#">SIINNA</a>.</strong> All rights reserved. -->
    <!-- </footer> -->
<!-- </div> -->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!-- <script src="<?php echo e(url('public/plugins/jquery/jquery.min.js')); ?>"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="<?php echo e(url('public/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script> -->

<!-- DataTables -->
<!-- <script src="<?php echo e(url('public/plugins/datatables/jquery.dataTables.min.js')); ?>"></script> -->
<!-- <script src="<?php echo e(url('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script> -->
<!-- <script src="<?php echo e(url('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script> -->
<!-- <script src="<?php echo e(url('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script> -->
<!-- AdminLTE App -->
<!-- <script src="<?php echo e(url('public/dist/js/adminlte.min.js')); ?>"></script> -->
<!-- Select2 -->
<!-- <script src="<?php echo e(url('public/plugins/select2/js/select2.full.min.js')); ?>"></script> -->
<!-- Bootstrap Switch -->
<!-- <script src="<?php echo e(url('public/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script> -->

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
  <?php echo $__env->yieldPushContent('jumlah-antrian'); ?>
</body>
</html>
<?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/template/base.blade.php ENDPATH**/ ?>