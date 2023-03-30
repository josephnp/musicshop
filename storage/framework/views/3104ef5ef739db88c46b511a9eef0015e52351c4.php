<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <form action="<?php echo e(route('uploadFile')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="file">Upload File</label>
        <input type="file" name="" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/form.blade.php ENDPATH**/ ?>