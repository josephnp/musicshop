<?php $__env->startSection("title", "Products"); ?>

<?php $__env->startSection("content"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/product.css')); ?>">
    <div class="mt-5 ms-5">
        <h2>Our Products</h2>
    </div>
    <div class="row d-flex flex-row-reverse sea2">
        <div class="col-md-6">
            <form action="/searchadmin">
                <div class="input-group mb-3 ms-2" style="width: 400px">
                    <input type="text" class="form-control" placeholder="Search product" name="search" value="<?php echo e(request('search')); ?>">
                    <div class="input-group-append ps-2 pe-2">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>
                    <div class="cart2 d-flex flex-row-reverse" style="">
                        <a href="/insertproduct" class="btn btn-info" type="submit">Insert Product</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container me-4" style="width: 5000px">
        <div class="row row-cols-2" >
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card text-black m-3" style="width: 275px">
                    <div class="d-flex justify-content-center">
                        <a href="/product/<?php echo e($datas->id); ?>">
                            <img src="<?php echo e(asset(trim($datas->picture))); ?>" class="p-3" alt="" style="height:200px" width="200px">
                        </a>
                    </div>
                    <div class="text-center">
                        <h5> <?php echo e($datas->name); ?> </h5>
                    </div>
                    <div class="text-center" style="color: grey">
                        IDR <?php echo e($datas->price); ?>

                    </div>
                    <div class="titletxt ms-5 me-5 mt-2">
                        <?php echo e($datas->category->name); ?>

                    </div>
                    <hr class="h ms-3">
                    <div class="cart3 mb-3 ms-2">
                        <a href="/update/<?php echo e($datas->id); ?>" class=""> Edit Product</a>
                        <a href="/remove/<?php echo e($datas->id); ?>" class="ms-4" style="background-color: red ;border-color:red"> Remove Product</a>
                    </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <?php echo e($products->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/admin/productadmin.blade.php ENDPATH**/ ?>