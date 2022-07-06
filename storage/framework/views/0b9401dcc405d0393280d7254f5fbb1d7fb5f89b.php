<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row" style="padding-top: 100px">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                      <label for="inputEmail" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>
                    </div>
                    <div class="mb-3">
                      <label for="permasalahan" class="form-label">Permasalahan</label>
                      <input type="text" class="form-control" id="permasalahan" style="height: 100px;">
                      <div id="permasalahanHelp" class="form-text">Semakin banyak informasi, semakin mudah bagi kami untuk membantu Anda.</div>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="alert('Berhasil mengirim keluhan:)')">Submit</button>
                </form>
            </div>
            <div class="col" style="padding-left: 200px;">
                <img src=<?php echo e(asset('icon-cs.png')); ?> alt="icon customer service" width="400px" style=" padding-top: 10%;">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/about/cs.blade.php ENDPATH**/ ?>