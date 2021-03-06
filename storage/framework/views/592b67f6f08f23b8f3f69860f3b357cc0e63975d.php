<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kode - Premium Bootstrap Admin Template</title>

    <!-- ========== Css Files ========== -->
    <link href="<?php echo e(asset('/admin/css/root.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('/js/jquery-3.3.1.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/layer/layer.js')); ?>"></script>
    <style type="text/css">
        body{background: #F5F5F5;}
    </style>
</head>
<body>

<div class="login-form">
    <?php echo Form::open(['url'=>'/admin/login']); ?>

        <div class="top">
            <img src="<?php echo e(asset('/admin/img/kode-icon.png')); ?>" alt="icon" class="icon">
            <h1>XXX</h1>
            <h4>后台管理系统</h4>
        </div>
        <div class="form-area">
            <div class="group">
                <input name="userName" type="text" class="form-control" placeholder="用户名">
                <i class="fa fa-user"></i>
            </div>
            <div class="group">
                <input name="password" type="password" class="form-control" placeholder="密码">
                <i class="fa fa-key"></i>
            </div>
            <button type="submit" class="btn btn-default btn-block">登录</button>
        </div>
    <?php echo Form::close(); ?>

</div>
<?php echo $__env->make('admin.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>