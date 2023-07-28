<?php $__env->startSection('content'); ?>
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('create post')); ?></h1>
                    <a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-success btn-sm shadow-sm"><?php echo e(__('Go Back')); ?></a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.posts.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title"><?php echo e(__('Title')); ?></label>
                        <input type="text" class="form-control" id="title" placeholder="<?php echo e(__('title')); ?>" name="title" value="<?php echo e(old('title')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="excerpt"><?php echo e(__('Excerpt')); ?></label>
                        <select name="excerpt" id="excerpt"><?php echo e(old('excerpt')); ?></select>
                    </div>
                    <div class="form-group">
                        <label for="description"><?php echo e(__('Decription')); ?></label>
                        <select name="description" id="description"><?php echo e(old('description')); ?></select> 
                    </div>
                    <div class="form-group">
                        <label for="banner"><?php echo e(__('Banner')); ?></label>
                        <input type="file" class="form-control" id="banner" placeholder="<?php echo e(__('banner')); ?>" name="banner" value="<?php echo e(old('banner')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="roles"><?php echo e(__('Role')); ?></label>
                        <select name="roles[]" id="roles" class="form-control select-multiple" multiple="multiple" required>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>" <?php echo e((in_array($id, old('roles', [])) || isset($role) && $role->roles->contains($id)) ? 'selected' : ''); ?>><?php echo e($roles); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success"><?php echo e(__('Save')); ?></button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style-alt'); ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-alt'); ?>
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Riz\Downloads\laravel-starter-master\laravel-starter-master\resources\views/admin/post/create.blade.php ENDPATH**/ ?>