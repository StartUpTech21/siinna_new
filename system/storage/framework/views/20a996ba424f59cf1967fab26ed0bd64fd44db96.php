
<?php $__env->startSection('content'); ?>
<section class="content">
	<div class="container-fluid">
	<?php if(Request()->User()->level1 == 'admin'): ?>
	<a href="<?php echo e(url('admin/user/create')); ?>">Tambah</a><br>
	<table border="1">
		<tr>
			<th>no</th>
			<th>Aksi</th>
			<th>Nama Tempat</th>
			<th>Username</th>
			<th>Email</th>
			<th>Level</th>
			<th>No Pelayanan</th>
		</tr>
		<?php $__currentLoopData = $list_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($loop->iteration); ?></td>
			<td>
				<a href="<?php echo e(url('admin/user',$d->id)); ?>">info</a>
				<a href="<?php echo e(url('admin/user',$d->id)); ?>/edit">Edit</a>
				<?php echo $__env->make('template.utils.delete',['url' => url('admin/user', $d->id)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</td>
			<td><?php echo e($d->nama_tempat); ?></td>
			<td><?php echo e($d->username); ?></td>
			<td><?php echo e($d->email); ?></td>
			<td><?php echo e($d->level1); ?></td>
			<td><?php echo e($d->no_pelayanan); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php endif; ?>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/user/index.blade.php ENDPATH**/ ?>