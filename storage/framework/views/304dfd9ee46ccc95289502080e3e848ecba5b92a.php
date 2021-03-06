<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(url('/')); ?>" class="brand-link">
        <img src="<?php echo e(asset('AdminLTE/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="<?php echo e(asset('AdminLTE/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block"><?php echo e(\Auth::user()->name); ?></a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if(\Auth::user()->is_admin == 1): ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Master
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('booksindex')); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Books</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Transaction
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('transaction')); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Transaction</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <?php if(\Auth::user()->is_admin == 1): ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Users
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('usersindex')); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Users</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside><?php /**PATH /var/www/html/crud-book/resources/views/includes/sidebar.blade.php ENDPATH**/ ?>