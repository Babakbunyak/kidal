<!-- resources/views/artikels/edit.blade.php -->
<h1>Edit Artikel</h1>
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

<form method="POST" action="<?php echo e(route('artikels.update', $artikel)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div>
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="<?php echo e($artikel->judul); ?>" required>
    </div>
    <div>
        <label for="konten">Konten:</label>
        <textarea name="konten" id="konten" required><?php echo e($artikel->konten); ?></textarea>
    </div>
    <button type="submit">Update</button>
</form>
<?php /**PATH D:\PROJECT_UTS\Bloger-2\resources\views/artikels/edit.blade.php ENDPATH**/ ?>