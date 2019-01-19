<div id="page-wrapper">


    <?php echo $__env->make('PAGE_WRAPPER.dashboard-page-heading', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <div class="row">
        <?php echo $__env->make('PAGE_WRAPPER.dasboard-contenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>



    <!-- /#page-wrapper -->
</div>