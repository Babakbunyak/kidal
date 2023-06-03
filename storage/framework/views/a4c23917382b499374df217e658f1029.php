<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
	<div class="container mt-4">
		<?php echo $__env->yieldContent('header'); ?>
		<div class="row">
			<?php echo $__env->yieldContent('main'); ?>
			<?php echo $__env->yieldContent('sidebar'); ?>
		</div>
	</div>
</body>
</html><?php /**PATH D:\PROJECT_UTS\Bloger-2\resources\views/master.blade.php ENDPATH**/ ?>