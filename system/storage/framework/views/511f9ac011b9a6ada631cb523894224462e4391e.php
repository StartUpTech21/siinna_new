<?php
  function checkrouteactive($route){
    if(Route::current()->uri == $route) return 'active';
  }
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?php echo e(url('index')); ?>" class="brand-link">
    <!-- <img src="<?php echo e(url('public')); ?>/img/favicon.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <!-- <span class="brand-text font-weight-light">Alat Kopi</span> -->
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="<?php echo e(url('public')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        
      </div>
      <div class="info">
        <a href="#" class="d-block">
         <?php echo e(request()->user()->username); ?>

        </a>
      </div>
    </div>
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="<?php echo e(url('admin/')); ?>" class="nav-link <?php echo e(checkRouteActive('beranda')); ?>">
            <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(url('admin/pelayanan')); ?>" class="nav-link <?php echo e(checkRouteActive('admin/pelayanan')); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pelayanan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(url('admin/user')); ?>" class="nav-link <?php echo e(checkRouteActive('admin/user')); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(url('logout')); ?>" class="nav-link <?php echo e(checkRouteActive('user')); ?>">
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
<?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/template/sidebar/sidebar_admin.blade.php ENDPATH**/ ?>