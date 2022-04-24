
<?php $__env->startSection('content'); ?>
<section class="content">
  <div class="container-fluid">

	<form action="<?php echo e(url('admin/pelayanan')); ?>" method="post">
		<?php echo csrf_field(); ?>
		<label>Jenis pelayanan</label>
		<select name="jenis_pelayanan" required>
			<option value="">--PILIH PELAYANAN--</option>
			<option value="teller">Teller</option>
			<option value="cs">CS</option>
		</select><br>
		<label>Nomor pelayanan</label>
		<input type="number" name="no_pelayanan" required>
		<br>
		<button type="submit">simpan</button>
	</form>

  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/pelayanan/create.blade.php ENDPATH**/ ?>