<div class="sidebar clearfix">

    <ul class="sidebar-panel nav">
        <li class="sidetitle">主题</li>
        <?php $__currentLoopData = \App\Model\Menu::leftMenu1(\App\Model\Admin::adminInfo()->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($val->url!=''): ?>
                <?php if($val->is_parameter): ?>
                <li><a href="<?php echo e(URL::action($val->url,[$val->parameter])); ?>"><span class="icon color5"><i class="fa <?php echo e($val->font); ?>"></i></span><?php echo e($val->title); ?><span class="label label-default"></span></a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(URL::action($val->url)); ?>"><span class="icon color5"><i class="fa <?php echo e($val->font); ?>"></i></span><?php echo e($val->title); ?><span class="label label-default"></span></a></li>
                <?php endif; ?>
            <?php else: ?>
                <li><a href="javascript:void(0);"><span class="icon color7"><i class="fa <?php echo e($val->font); ?>"></i></span><?php echo e($val->title); ?><span class="caret"></span></a>
                    <ul>
                        <?php $__currentLoopData = $val->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($v->url!=''): ?>
                                <li><a href="<?php echo e(URL::action($v->url)); ?>"><?php echo e($v->title); ?></a></li>
                            <?php else: ?>
                                <li><a href="javascript:void(0);"><?php echo e($v->title); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>