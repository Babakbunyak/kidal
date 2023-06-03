

<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if($artikels->isEmpty()): ?>
            <p>Tidak ada artikel.</p>
        <?php else: ?>
            <div class="card-columns">
                <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo e($artikel->judul); ?></h2>
                            <p class="card-text"><?php echo e($artikel->konten); ?></p>
                            <a href="<?php echo e(route('artikels.show', $artikel)); ?>" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT_UTS\Bloger-2\resources\views/artikels/index.blade.php ENDPATH**/ ?>