<?php $__env->startSection('container'); ?>
    <div class="container" style="padding-top: 100px">
        <table align="center">
            <tr>
                <th style="text-align: center"><h3><?php echo e($nama_event); ?></h3></th>
            </tr>
            <tr>
                <td style="text-align: center; padding-top: 20px;">
                    <img src=<?php echo e($img); ?> alt="poster event" style=" width: 450px; padding-bottom: 20px;">
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $caption_pembuka; ?>

                    Yuk bisa langsung daftar melalui link 👇 <br>
                    <a href=<?php echo e($link_pendaftaran); ?>>KLIK DI SINI!!</a> <br><br>
                    Acara akan dilaksanakan pada:
                    <table>
                        <tr>
                            <th>Tanggal</th>
                            <th>:</th>
                            <td><?php echo e($tanggal); ?></td>
                        </tr>
                        <tr>
                            <th>Waktu</th>
                            <th>:</th>
                            <td><?php echo e($waktu); ?></td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <th>:</th>
                            <td><?php echo e($lokasi); ?></td>
                        </tr>
                    </table><br>
                    <?php echo $benefit; ?>

                    <?php echo $caption_penutup; ?>

                </td>
            </tr>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/event_detail/event_detail.blade.php ENDPATH**/ ?>