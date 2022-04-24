<?php
  function checkrouteactive($route){
    if(Route::current()->uri == $route) return 'active';
  }
?>

<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="<?php echo e(url('cs/')); ?>" class="px-4 <?php echo e(checkRouteActive('beranda')); ?>"><i><p>Beranda</p></i></a>
</div>
<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="<?php echo e(url('cs/antrean')); ?>" class="px-4 <?php echo e(checkRouteActive('beranda')); ?>"><i><p>Nomor Antrean</p></i></a>
</div>
<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="<?php echo e(url('cs/laporan')); ?>" class="px-4 <?php echo e(checkRouteActive('beranda')); ?>"><i><p>Laporan</p></i></a>
</div>
<div class="px-3 hover:bg-[#F9AD3C] hover:text-white">
  <a href="<?php echo e(url('logout')); ?>" class="px-4 <?php echo e(checkRouteActive('beranda')); ?>"><i><p>Logout</p></i></a>
</div>
<?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/template/sidebar/sidebar_cs.blade.php ENDPATH**/ ?>