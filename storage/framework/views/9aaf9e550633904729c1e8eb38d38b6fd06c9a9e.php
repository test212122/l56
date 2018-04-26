<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Start Row -->
    <div class="row">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">管理员列表</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/index">首页</a></li>
                <li class="active">管理员列表</li>
            </ol>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/admin/create" class="btn btn-light"><i class="fa fa-plus"></i>新建管理员</a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-title">
                    管理员列表
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>用户名</td>
                            <td>所属分组</td>
                            <td>手机号</td>
                            <td>创建时间</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = \App\Model\Admin::orderBy('id')->where('user_name','<>','admin@admin.com')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($val->user_name); ?></td>
                                <td><?php echo e($val->group->title); ?></td>
                                <td><?php echo e($val->mobile); ?></td>
                                <td><?php echo e($val->created_at); ?></td>
                                <td>
                                    <a href="/admin/admin/edit?id=<?php echo e($val->id); ?>">编辑</a>
                                    <a href="javascript:void(0);" class="alert_message" url="<?php echo e(action('Admin\AdminController@dels')); ?>" data-id="<?php echo e($val->id); ?>">删除</a>
                                </td>
                            </tr>
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