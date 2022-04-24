
<?php $__env->startSection('content'); ?>
<section class="content">
  <div class="container-fluid">
  	<a href="<?php echo e(url('admin/pelayanan/create')); ?>">Tambah</a><br>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Aksi</th>
			<th>Nama Tempat</th>
			<th>Jenis Pelayanan</th>
			<th>Nomor Pelayanan</th>
		</tr>
		<?php $__currentLoopData = $list_pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($loop->iteration); ?></td>
			<td>
				<a href="<?php echo e(url('admin/pelayanan',$d->id)); ?>/edit">Edit</a>
				<?php echo $__env->make('template.utils.delete',['url' => url('admin/pelayanan', $d->id)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</td>
			<td><?php echo e($d->nama_tempat); ?></td>
			<td><?php echo e($d->jenis_pelayanan); ?></td>
			<td><?php echo e($d->no_pelayanan); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/pelayanan/index.blade.php ENDPATH**/ ?>