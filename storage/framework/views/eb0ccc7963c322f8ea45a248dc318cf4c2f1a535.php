<?php $__env->startSection('page_heading','PROTOCOLS'); ?>
<?php $__env->startSection('section'); ?>

    <div class="row">
        <div class="col-sm-12">
            <?php $__env->startSection('cotable_panel_title','LISTS PROTOCOLS'); ?>
            <div class="table-responsive">
                <div align="right">
                    <button type="button" name="add" id="add" class="btn btn-danger" title="Nouveau"><i class="fa fa-plus-square "></i></button>
                </div>
            </div>
            
            <?php $__env->startSection('cotable_panel_body'); ?>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="success">
                        <td>John</td>
                        <td>john@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Wayne</td>
                        <td>wayne@gmail.com</td>
                    </tr>
                    <tr class="info">
                        <td>Andy</td>
                        <td>andy@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Danny</td>
                        <td>danny@gmail.com</td>
                    </tr>
                    <tr class="warning">
                        <td>Frank</td>
                        <td>frank@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Scott</td>
                        <td>scott@gmail.com</td>
                    </tr>
                    <tr class="danger">
                        <td>Rickie</td>
                        <td>rickie@gmail.com</td>
                    </tr>
                    </tbody>
                </table>
            <?php $__env->stopSection(); ?>
            <?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'cotable'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>