<?php $__env->startSection("title","Add Category"); ?>

<?php $__env->startSection("content"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/insertprod.css')); ?>">
    <h1 class="text-center">Insert Category</h1>
    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mt-3 d-flex align-items-center justify-content-center">
            <div class="btn btn-info">
                <?php echo e($datas->name); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="card d-flex align-items-center justify-content-center crd mt-5">
        <form action="<?php echo e(route('insertc')); ?>" method="POST"  class="m-3" enctype="multipart/form-data">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <?php echo csrf_field(); ?>
            <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form3Example1"> Category Name</label>
                    <input name="name" type="text" id="form3Example1" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " value="<?php echo e(old('name')); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <button class="btn btn-info" type="submit">Insert</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/admin/insertcategory.blade.php ENDPATH**/ ?>