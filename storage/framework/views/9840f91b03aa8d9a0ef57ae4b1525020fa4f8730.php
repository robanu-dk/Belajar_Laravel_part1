<?php $__env->startSection('container'); ?>
    <div class="container">
        <h1 style="padding-top: 100px">
            <?php echo e($website_name); ?>

        </h1><br>
        <p style="word-wrap: break-word;">
            <?php echo e($description_website); ?>

        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/about/tentangjimmonshop.blade.php ENDPATH**/ ?>