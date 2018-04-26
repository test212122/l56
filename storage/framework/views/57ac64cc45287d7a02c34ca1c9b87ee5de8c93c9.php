<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="page-header">
        <h1 class="title">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">This is a quick overview of some features</li>
        </ol>

        <!-- Start Page Header Right Div -->
        <div class="right">
            <div class="btn-group" role="group" aria-label="...">
                <a href="index.html" class="btn btn-light">Dashboard</a>
                <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
            </div>
        </div>
        <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->


    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTAINER -->
    <div class="container-widget">

        <!-- Start Top Stats -->
        <div class="col-md-12">
            <ul class="topstats clearfix">
                <li class="arrow"></li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-dot-circle-o"></i> Today Profit</span>
                    <h3>$36.45</h3>
                    <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
                </li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-calendar-o"></i> This Week</span>
                    <h3>$96.25</h3>
                    <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
                </li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-shopping-cart"></i> Total Sales</span>
                    <h3 class="color-up">696</h3>
                    <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last month</span>
                </li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-users"></i> Visitors</span>
                    <h3>960</h3>
                    <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
                </li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-eye"></i> Page View</span>
                    <h3 class="color-up">46.230</h3>
                    <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
                </li>
                <li class="col-xs-6 col-lg-2">
                    <span class="title"><i class="fa fa-clock-o"></i> Avarage Time</span>
                    <h3 class="color-down">2:10<small>min</small></h3>
                    <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
                </li>
            </ul>
        </div>
        <!-- End Top Stats -->


        <!-- Start First Row -->
        <div class="row">

            <!-- Start Chart Daily -->
            <div class="col-md-12 col-lg-7">
                <div class=" panel-widget widget chart-with-stats clearfix" style="height:450px;">

                    <div class="col-sm-12" style="height:450px;">
                        <h4 class="title">TODAY SALES<small>Last update: 1 Hours ago</small></h4>
                        <div class="top-label"><h2>11.291</h2><h4>Today Total</h4></div>
                        <div class="bigchart" id="todaysales"></div>
                    </div>
                    <div class="right" style="height:450px;">
                        <h4 class="title">PAGE VIEW</h4>
                        <!-- start stats -->
                        <ul class="widget-inline-list clearfix">
                            <li class="col-12"><span>962</span>Themeforest<i class="chart sparkline-green"></i></li>
                            <li class="col-12"><span>367</span>Codecanyon<i class="chart sparkline-blue"></i></li>
                            <li class="col-12"><span>92</span>Photodune<i class="chart sparkline-red"></i></li>
                        </ul>
                        <!-- end stats -->
                    </div>


                </div>
            </div>
            <!-- End Chart Daily -->


            <!-- Start Files -->
            <div class="col-md-12 col-lg-5">
                <div class="panel panel-widget" style="height:450px;">
                    <div class="panel-title">
                        My Files <span class="label label-danger">29</span>
                        <ul class="panel-tools">
                            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
                            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>
                    <div class="panel-body table-responsive">

                        <table class="table table-dic table-hover ">
                            <tbody>
                            <tr>
                                <td><i class="fa fa-folder-o"></i>Projects</td>
                                <td>Folder</td>
                                <td class="text-r">27/2/2015 12:34 AM</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-file-archive-o"></i>Backup</td>
                                <td>Zip</td>
                                <td class="text-r">27/2/2015 12:34 AM</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-file-code-o"></i>Kode Theme</td>
                                <td>Html</td>
                                <td class="text-r">27/2/2015 12:34 AM</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-file-pdf-o"></i>Documents</td>
                                <td>Pdf</td>
                                <td class="text-r">27/2/2015 12:34 AM</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-folder-o"></i>Themes</td>
                                <td>Folder</td>
                                <td class="text-r">27/2/2015 12:34 AM</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-folder-o"></i>Uploaded Files</td>
                                <td>Folder</td>
                                <td class="text-r">27/2/2015 12:34 AM</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-folder-o"></i>Personal Files</td>
                                <td>Folder</td>
                                <td class="text-r">27/2/2015 12:34 AM</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- End Files -->

        </div>
        <!-- End First Row -->









    </div>
    <!-- END CONTAINER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>