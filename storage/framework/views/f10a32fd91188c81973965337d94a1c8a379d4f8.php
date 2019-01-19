    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown message-->
        <?php echo $__env->make('NAV_BAR.navbar_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /.dropdown task-->
        <?php echo $__env->make('NAV_BAR.narbar_task', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /.dropdown Cloche-->
        <?php echo $__env->make('NAV_BAR.navbar_cloche', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /.dropdown User-->
        <?php echo $__env->make('NAV_BAR.info_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->