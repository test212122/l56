<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Start Row -->
    <div class="row">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">分类列表</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/index">首页</a></li>
                <li class="active">分类列表</li>
            </ol>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/news_class/create" class="btn btn-light"><i class="fa fa-plus"></i>新建分类</a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-title">
                    分类列表
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>标题</td>
                            <td>所属分组</td>
                            <td>排序</td>
                            <td>推荐</td>
                            <td>简介</td>
                            <td>创建时间</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = \App\Model\NewsClass::orderBy('sort')->orderBy('id','desc')->whereNull('parent_id')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($val->title); ?></td>
                                <td><?php echo e(\App\Model\NewsClass::where('id',$val->parent_id)->value('title')); ?></td>
                                <td><?php echo e($val->sort); ?></td>
                                <td><?php echo e(\App\Model\NewsClass::status($val->status)); ?></td>
                                <td><?php echo e($val->intro); ?></td>
                                <td><?php echo e($val->created_at); ?></td>
                                <td>
                                    <a href="/admin/news_class/edit?id=<?php echo e($val->id); ?>">编辑</a>
                                    <a href="javascript:void(0);" class="alert_message" url="<?php echo e(action('Admin\NewsClassController@dels')); ?>" data-id="<?php echo e($val->id); ?>">删除</a>
                                </td>
                            </tr>
                            <?php $__currentLoopData = \App\Model\NewsClass::orderBy('sort')->orderBy('id','desc')->where('parent_id',$val->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="text-indent:3%;"><span style="font-size: 16px;">┣ </span> <?php echo e($va->title); ?></td>
                                    <td><?php echo e(\App\Model\NewsClass::where('id',$va->parent_id)->value('title')); ?></td>
                                    <td><?php echo e($va->sort); ?></td>
                                    <td><?php echo e(\App\Model\NewsClass::status($va->status)); ?></td>
                                    <td><?php echo e($va->intro); ?></td>
                                    <td><?php echo e($va->created_at); ?></td>
                                    <td>
                                        <a href="/admin/news_class/edit?id=<?php echo e($va->id); ?>">编辑</a>
                                        <a href="javascript:void(0);" class="alert_message" url="<?php echo e(action('Admin\NewsClassController@dels')); ?>" data-id="<?php echo e($va->id); ?>">删除</a>
                                    </td>
                                </tr>
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