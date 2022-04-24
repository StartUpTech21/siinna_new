<?php if(Request()->User()->level1 == 'superadmin'): ?>
    <?php echo $__env->make('template.sidebar.sidebar_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Request()->User()->level1 == 'admin' ): ?>
    <?php echo $__env->make('template.sidebar.sidebar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Request()->User()->level1 == 'cs' ): ?>
    <?php echo $__env->make('template.sidebar.sidebar_cs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Request()->User()->level1 == 'teller' ): ?>
    <?php echo $__env->make('template.sidebar.sidebar_teller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/template/sidebar/sidebar_main.blade.php ENDPATH**/ ?>