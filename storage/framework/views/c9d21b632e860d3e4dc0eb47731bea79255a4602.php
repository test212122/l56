<?php if(session('status')): ?>

    <div class="tools-alert tools-alert-green">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="display: none;" class="alert_msg"><?php echo e($error); ?></div>
        <script type="text/javascript">
            $(function () {
                layer.msg($(".alert_msg").html());
            })

        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>