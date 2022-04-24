<?php $__currentLoopData = ['success','warning','danger']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if(session($status)): ?>
		<div class="alert alert-<?php echo e($status); ?> alert-dismissable custom-<?php echo e($status); ?>-box">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong><?php echo e(session($status)); ?></strong>
		</div>
	<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/template/utils/notif.blade.php ENDPATH**/ ?>