
<?php $__env->startSection('content'); ?>
<section class="content">
  <div class="container-fluid">

  <form action="<?php echo e(url('admin/pelayanan',$pelayanan->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field("PUT"); ?>
    <label>Pilih tempat</label>
    <input type="hidden" name="id_tempat" value="<?php echo e($pelayanan->id_tempat); ?>" readonly><br>
    <input type="text" value="<?php echo e($pelayanan->nama_tempat); ?>" readonly><br>
    <label>Jenis pelayanan</label>
    <select name="jenis_pelayanan" required>
      <option value="">--PILIH PELAYANAN--</option>
      <option value="teller" <?php if($pelayanan->jenis_pelayanan=='teller'): ?> selected <?php endif; ?>>Teller</option>
      <option value="cs" <?php if($pelayanan->jenis_pelayanan=='cs'): ?> selected <?php endif; ?>>CS</option>
    </select><br>
    <label>Nomor pelayanan</label>
    <input type="number" name="no_pelayanan" value="<?php echo e($pelayanan->no_pelayanan); ?>" required>
    <br>
    <button type="submit">simpan</button>
  </form>

  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/pelayanan/edit.blade.php ENDPATH**/ ?>