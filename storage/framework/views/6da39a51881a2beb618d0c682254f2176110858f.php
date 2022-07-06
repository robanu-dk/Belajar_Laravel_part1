<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row" style="padding-top: 100px; width: 1200px;">
            <div class="col">
                <table border="1" style="table-layout: fixed; text-align: center; width: 350px; height: 450px; border-color: #eeeeee;">
                    <tr>
                        <td style="height: 250px"><img src=<?php echo e($img_organisasi); ?> alt="logo tentang organisasi" style="width: 200px; height: 200px;"></td>
                    </tr>
                    <tr>
                        <th>Tentang Organisasi</th>
                    </tr>
                    <tr>
                        <td style="height: 200px; word-wrap: break-word;"><?php echo e($sekilas_info_organisasi); ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 10px; padding-bottom: 10px;"><a class="btn btn-primary" href="/tentang+organisasi" role="button">More</a></td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <table border="1" style="table-layout: fixed; text-align: center; width: 350px; height: 450px; border-color: #eeeeee;">
                    <tr>
                        <td style="height: 250px"><img src=<?php echo e($img_jimmonshop); ?> alt="logo bumj" style="width: 200px; height: 200px;"></td>
                    </tr>
                    <tr>
                        <th>Tentang Jimmonshop</th>
                    </tr>
                    <tr>
                        <td style="height: 200px; word-wrap: break-word;"><?php echo e($sekilas_info_jimmonshop); ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 10px; padding-bottom: 10px;"><a class="btn btn-primary" href="/tentang+jimmonshop" role="button">More</a></td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <table border="1" style="table-layout: fixed; text-align: center; width: 350px; height: 450px; border-color: #eeeeee;">
                    <tr>
                        <td style="height: 250px"><img src=<?php echo e($img_customer); ?> alt="logo customer service" style="width: 200px; height: 200px;"></td>
                    </tr>
                    <tr>
                        <th>Customer Service</th>
                    </tr>
                    <tr>
                        <td style="height: 200px; word-wrap: break-word;"><?php echo e($Sekilas_info_cs); ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 10px; padding-bottom: 10px;"><a class="btn btn-primary" href="/customer+services" role="button">More</a></td>
                    </tr>
                </table>
            </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/about.blade.php ENDPATH**/ ?>