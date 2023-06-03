
<?php $__env->startSection('title', 'Blog Niaga'); ?>

<?php $__env->startSection('header'); ?>
	<center>
		<h2>Blog Niaga</h2>
		<a href="/add"><button class="btn btn-success">Tambah artikel</button></a>
	</center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
	<?php $__currentLoopData = @artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4 col-sm-12 mt-14">
			<div class="card">
				<img src="#" class="card-img-top" alt="gambar">
				<div class="card-body">
					<h5 class="card-body"><?php echo e($article->judul); ?></h5>
					<a href="/detail/<?php echo e($article->id); ?>" class="btn btn-primary">baca artikel</a>
				</div>
			</div>
			</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT_UTS\Bloger-2\resources\views/show.blade.php ENDPATH**/ ?>