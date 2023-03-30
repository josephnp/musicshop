<?php $__env->startSection("title","product"); ?>
<?php $__env->startSection("body"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/insertprod.css')); ?>">

<h1 class="text-center"> <?php echo e($products->name); ?> </h1>
<div class="container d-flex align-items-center justify-content-center mt-3 blaa">
    <img src="<?php echo e(asset(trim($products->picture))); ?>" class="rounded" alt="">
</div>

<div class="card d-flex align-items-center justify-content-center crd mt-5">

<form action="/update/<?php echo e($products->id); ?>" method="POST"  class="m-3" enctype="multipart/form-data">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <?php echo csrf_field(); ?>
<div class="col mb-4">
      <div class="form-outline">
        <div>
            <label class="form-label" for="form3Example1">Image</label>
        <input name="pic" type="file" id="form3Example1" class="form-control <?php $__errorArgs = ['pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                is-invalid
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('pic')); ?>">

        <?php $__errorArgs = ['pic'];
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
</div>
<hr class="h">
<div class="col-md-6 mb-4">
    <div class="form-outline"><label class="form-label" for="form3Example1">Description</label>
      <input name="description" type="text" id="form3Example1" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          is-invalid
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " required value="<?php echo e(old('description')); ?>">

      <?php $__errorArgs = ['description'];
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
<hr class="h">
<div class="col-md-6 mb-4">
    <div class="form-outline"><label class="form-label" for="form3Example1">Price</label>
      <input name="price" type="integer" id="form3Example1" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          is-invalid
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " required value="<?php echo e(old('price')); ?>">

      <?php $__errorArgs = ['price'];
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
<hr class="h">
<div class="col-md-6 mb-4">
    <div class="form-outline"><label class="form-label" for="form3Example1">Product Quantity</label>
      <input name="stock" type="integer" id="form3Example1" class="form-control <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          is-invalid
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " required value="<?php echo e(old('stock')); ?>">

      <?php $__errorArgs = ['stock'];
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
<hr>
<div class="col-md-6 mb-4">
    <div class="form-outline"><label class="form-label" for="form3Example1">Category Name</label>
      <select name="category_id" id="category_id">
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($ctg->id); ?>" class=""> <?php echo e($ctg->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
</div>
<hr class="h">
<button class="btn btn-info" type="submit">Update</button>
</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\binus\Semester 5\Web Programming\ProjectLab\projectlab\resources\views/updateproduct.blade.php ENDPATH**/ ?>