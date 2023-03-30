<?php $__env->startSection("title","Home"); ?>

<?php $__env->startSection("content"); ?>
    <div class="d-flex justify-content-center">
        <h2>Level Up Your</h2>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <h2>Music Collection</h2>
    </div>
    <div class="container p-4 d-flex justify-content-center" style="width: 1000px">
        <div class="row row-cols-3">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col mb-4">
                    <img src="<?php echo e(asset(trim($datas->picture))); ?>" class="rounded" alt="" style="height:200px" width="200px">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div>
            <h3 class="">Top Class Security</h3>
            <p>We are proud to provide fast and professional delivery services with all major payment methods
            <br>available through our online shop. Additionally, if you require some flexibility regarding payment,
            <br>we provide finance options so you can pay in installments
            </p>
        </div>
        <div class="ps-3">
            <img src="image/secure.jpg" alt="" class="rounded" style="height:150px" width="150px">
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="pe-3">
            <img src="image/secure.jpg" alt="" class="rounded" style="height:150px" width="150px">
        </div>
        <div>
            <h3 class="">Top Class Security</h3>
            <p>We are proud to provide fast and professional delivery services with all major payment methods
            <br>available through our online shop. Additionally, if you require some flexibility regarding payment,
            <br>we provide finance options so you can pay in installments
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.guest", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/guest/home.blade.php ENDPATH**/ ?>