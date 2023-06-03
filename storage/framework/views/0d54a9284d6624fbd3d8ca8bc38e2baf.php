<!-- resources/views/artikels/show.blade.php -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<h1><?php echo e($artikel->judul); ?></h1>
<p><?php echo e($artikel->konten); ?></p>
<a href="<?php echo e(route('artikels.edit', $artikel)); ?>">Edit</a>

<form method="POST" action="<?php echo e(route('artikels.destroy', $artikel)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit">Hapus</button>
    
</form>
<?php /**PATH D:\PROJECT_UTS\Bloger-2\resources\views/artikels/show.blade.php ENDPATH**/ ?>