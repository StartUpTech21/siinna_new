
<?php $__env->startSection('content'); ?>
<section class="content">
  <div class="container-fluid">
<?php if(Request()->User()->level1 == 'admin'): ?>
		<form action="<?php echo e(url('admin/user',$data->id)); ?>" method="post">
			<?php echo csrf_field(); ?>
			<?php echo method_field("PUT"); ?>
			<input type="hidden" name="status" value="1" required>
			<label>Username</label><input type="text" name="username" value="<?php echo e($data->username); ?>" required><br>
			<label>Email</label><input type="email" name="email" value="<?php echo e($data->email); ?>" required><br>
			<label>Password</label><input type="password" name="password"><br>
			<label>Level</label>
			<select name="level1" required>
				<option value="admin" <?php if($data->level1=='admin'): ?> selected <?php endif; ?>>admin</option>
				<option value="teller" <?php if($data->level1=='teller'): ?> selected <?php endif; ?>>teller</option>
				<option value="cs" <?php if($data->level1=='cs'): ?> selected <?php endif; ?>>cs</option>
			</select><br>
			<label>No Pelayanan</label><input type="number" name="no_pelayanan" value="<?php echo e($data->no_pelayanan); ?>"><br>

			<br>
			<button type="submit">simpan</button>
		</form>
<?php endif; ?>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/user/edit.blade.php ENDPATH**/ ?>