<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>


            <li <?php echo e((Request::is('/') ? 'class="active"' : '')); ?>>
                <a href="<?php echo e(url ('/')); ?>"><i class="fa fa-dashboard fa-fw"></i> HOME </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-folder-open"></i> RISK ASSESSMENT<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">NEW EXPERIENCE</a>
                    </li>
                    <li>
                        <a href="#"> ALL EXPERIENCES </a>
                    </li>
                    <li>
                        <a href="#"> RISK MAPPING <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            <li>
                                <a href="#">PROTOCOLS</a>
                            </li>
                            <li>
                                <a href="#">THREATS</a>
                            </li>
                            <li>
                                <a href="#">VULNERABILITIES</a>
                            </li>

                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


            <!--  EXPERIENCES -->
            

            <!--  Menaces -->
            <li <?php echo e((Request::is('/') ? 'class="active"' : '')); ?>>
                <a href="<?php echo e(url ('')); ?>"><i class="fa fa-exclamation-triangle"></i> THREATS </a>
            </li>

            <!--  Vulnerabilites -->
            <li <?php echo e((Request::is('/') ? 'class="active"' : '')); ?>>
                <a href="<?php echo e(url ('')); ?>"><i class="fa fa-filter"></i> VULNERABILITY </a>
            </li>

            <!--  Protocols -->
            <li <?php echo e((Request::is('/') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('Protocoles')); ?>"><i class="fa fa-sitemap fa-fw"></i> PROTOCOLS </a>
            </li>




            


            <li <?php echo e((Request::is('/') ? 'class="active"' : '')); ?>>
                <a href="<?php echo e(url ('#')); ?>"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>