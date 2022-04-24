
<?php $__env->startSection('content'); ?>
    <section class="content">
      <div class="container-fluid">
<?php if(Request()->User()->level1 == 'admin'): ?>
		<form action="<?php echo e(url('admin/user')); ?>" method="post">
			<?php echo csrf_field(); ?>
			<input type="hidden" name="status" value="1" required>
			<label>Username</label><input type="text" name="username" required><br>
			<label>Email</label><input type="email" name="email" required><br>
			<label>Password</label><input type="password" name="password" required><br>
			<label>Level</label>
			<select name="level1" required>
				<option value="teller">teller</option>
				<option value="cs">cs</option>
			</select><br>
			<label>No Pelayanan</label><input type="number" name="no_pelayanan" required><br>

			<br>
			<button type="submit">simpan</button>
		</form>
<?php endif; ?>
      </div>
  </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/user/create.blade.php ENDPATH**/ ?>