<?php $__env->startSection('container'); ?>
    <div class="container">
        <h1 style="padding-top: 100px">
            <?php echo e($stakeholder_name); ?>

        </h1><br>
        <p>
            <?php echo e($description_organisasi); ?> Salah satu media online tempat berjualannya adalah akun instagramnya yaitu <strong><?php echo e($instagram); ?></strong>.
        </p>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/about/tentangorganisasi.blade.php ENDPATH**/ ?>