<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <!-- Tambahkan link CSS Anda di sini -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <H1>BabakBunyak</H1>
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('artikels.index')); ?>">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('artikels.create')); ?>">Tambah Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <main>
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\PROJECT_UTS\Bloger-2\resources\views/layouts/app.blade.php ENDPATH**/ ?>