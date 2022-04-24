<form action="<?php echo e($url); ?>" method="post" class="form-inline" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ??')">
	<?php echo csrf_field(); ?>
	<?php echo method_field("delete"); ?>
	<!-- <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button> -->
	<button>delete</button>
</form><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/template/utils/delete.blade.php ENDPATH**/ ?>