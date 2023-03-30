<?php $__env->startSection("title", "$product->name"); ?>

<?php $__env->startSection("content"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/insertprod.css')); ?>">
    <div class="container d-flex align-items-center justify-content-center mt-3 blaa">
        <img src="<?php echo e(asset(trim($product->picture))); ?>" class="rounded" alt="" style="width: 400px; heigth: 150px">
    </div>
    <div class="container d-flex align-items-center justify-content-center" >
        <div class="p-1">
            <h1>
            <?php echo e($product->name); ?>

            </h1>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center" >
        <div class="p-1" style="font-size: 20px">
            <?php echo e($product->description); ?>

        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center" >
        <div class="p-1" style="font-size: 20px">
            Category : <?php echo e($product->category->name); ?>

        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center" >
        <div class="p-1" style="font-size: 20px">
            Stock : <?php echo e($product->stock); ?>

        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center" >
        <div class="p-1" style="font-size: 20px">
            Price : <?php echo e($product->price); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/admin/product_detail.blade.php ENDPATH**/ ?>