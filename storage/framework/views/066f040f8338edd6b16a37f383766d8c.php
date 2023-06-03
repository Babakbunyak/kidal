<!-- resources/views/artikels/create.blade.php -->
<h1>Buat Artikel Baru</h1>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('artikels.store')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="<?php echo e(old('judul')); ?>" required>
    </div>
    <div>
        <label for="konten">Konten:</label>
        <textarea name="konten" id="konten" required><?php echo e(old('konten')); ?></textarea>
    </div>
    <button type="submit">Simpan</button>
</form>
<?php /**PATH D:\PROJECT_UTS\Bloger-2\resources\views/artikels/create.blade.php ENDPATH**/ ?>