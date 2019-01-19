<?php $__env->startSection('body'); ?>
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <?php echo $__env->make('NAV_BAR.Title-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.navbar-header -->

          <?php echo $__env->make('NAV_BAR.navbar_static_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- /.navbar-top-links -->

            <?php echo $__env->make('SIDEBAR.sidebar_default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.navbar-static-side -->
        </nav>

          <?php echo $__env->make('PAGE_WRAPPER.page_wrapper', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>