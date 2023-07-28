<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="<?php echo e(route('admin.profile.show')); ?>" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs nav-icon"></i>
                        <p>
                        <?php echo e(__('User Management')); ?>

                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.users.index')); ?>"> <i class="fa fa-user mr-2"></i> <?php echo e(__('Users')); ?></a>
                            <a class="nav-link <?php echo e(request()->is('admin/posts') || request()->is('admin/posts/*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.posts.index')); ?>"> <i class="fa fa-post mr-2"></i> <?php echo e(__('Posts')); ?></a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>

            <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard.index')); ?>" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                        <?php echo e(__('Dashboard')); ?>

                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar --><?php /**PATH C:\Users\Riz\Downloads\laravel-starter-master\laravel-starter-master\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>