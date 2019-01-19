<li <?php echo e((Request::is('*charts') ? 'class="active"' : '')); ?>>
    <a href="<?php echo e(url ('charts')); ?>"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a>
    <!-- /.nav-second-level -->
</li>
<li <?php echo e((Request::is('*tables') ? 'class="active"' : '')); ?>>
    <a href="<?php echo e(url ('tables')); ?>"><i class="fa fa-table fa-fw"></i> Tables</a>
</li>
<li <?php echo e((Request::is('*forms') ? 'class="active"' : '')); ?>>
    <a href="<?php echo e(url ('forms')); ?>"><i class="fa fa-edit fa-fw"></i> Forms</a>
</li>
<li >
    <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li <?php echo e((Request::is('*panels') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('panels')); ?>">Panels and Collapsibles</a>
        </li>
        <li <?php echo e((Request::is('*buttons') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('buttons' )); ?>">Buttons</a>
        </li>
        <li <?php echo e((Request::is('*notifications') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url('notifications')); ?>">Alerts</a>
        </li>
        <li <?php echo e((Request::is('*typography') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('typography')); ?>">Typography</a>
        </li>
        <li <?php echo e((Request::is('*icons') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('icons')); ?>"> Icons</a>
        </li>
        <li <?php echo e((Request::is('*grid') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('grid')); ?>">Grid</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="#">Second Level Item</a>
        </li>
        <li>
            <a href="#">Second Level Item</a>
        </li>
        <li>
            <a href="#">Third Level <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li>
                    <a href="#">Third Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level Item</a>
                </li>
            </ul>
            <!-- /.nav-third-level -->
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li <?php echo e((Request::is('*blank') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('blank')); ?>">Blank Page</a>
        </li>
        <li>
            <a href="<?php echo e(url ('login')); ?>">Login Page</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>