<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Start Row -->
    <div class="row">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">控制面板</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/index">首页</a></li>
                <li class="active">控制面板</li>
            </ol>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/menu/create" class="btn btn-light"><i class="fa fa-plus"></i>添加</a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-title">
                    控制面板
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>标题</td>
                            <td>路由</td>
                            <td>排序</td>
                            <td>是否展示</td>
                            <td>是否有参数</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = \App\Model\Menu::leftMenu(\App\Model\Admin::adminInfo()->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($val->title); ?></td>
                                <td><?php echo e($val->url); ?></td>
                                <td><?php echo e($val->sort); ?></td>
                                <td><?php echo e($val->is_show?'是':'否'); ?></td>
                                <td><?php echo e($val->is_parameter?'是':'否'); ?></td>
                                <td>
                                    <a href="/admin/menu/edit?id=<?php echo e($val->id); ?>">编辑</a>
                                    <a href="javascript:void(0);" class="alert_message" url="<?php echo e(action('Admin\MenuController@dels')); ?>" data-id="<?php echo e($val->id); ?>">删除</a>
                                </td>
                            </tr>
                            <?php $__currentLoopData = $val->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="text-indent:2%;"><span style="font-size: 16px;">┣ </span> <?php echo e($v->title); ?></td>
                                    <td><?php echo e($v->url); ?></td>
                                    <td><?php echo e($v->sort); ?></td>
                                    <td><?php echo e($v->is_show?'是':'否'); ?></td>
                                    <td><?php echo e($v->is_parameter?'是':'否'); ?></td>
                                    <td>
                                        <a href="/admin/menu/edit?id=<?php echo e($v->id); ?>">编辑</a>
                                        <a href="javascript:void(0);" class="alert_message" url="<?php echo e(action('Admin\MenuController@dels')); ?>" data-id="<?php echo e($v->id); ?>">删除</a>
                                    </td>
                                </tr>
                                <?php $__currentLoopData = $v->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-indent:3%;"><span style="font-size: 16px;">┣ </span> <?php echo e($va->title); ?></td>
                                        <td><?php echo e($va->url); ?></td>
                                        <td><?php echo e($va->sort); ?></td>
                                        <td><?php echo e($va->is_show?'是':'否'); ?></td>
                                        <td><?php echo e($va->is_parameter?'是':'否'); ?></td>
                                        <td>
                                            <a href="/admin/menu/edit?id=<?php echo e($va->id); ?>">编辑</a>
                                            <a href="javascript:void(0);" class="alert_message" url="<?php echo e(action('Admin\MenuController@dels')); ?>" data-id="<?php echo e($va->id); ?>">删除</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- End Panel -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>