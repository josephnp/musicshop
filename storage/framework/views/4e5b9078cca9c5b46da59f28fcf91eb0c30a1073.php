

<?php $__env->startSection('navbar'); ?>
    <li class="nav-item">
        <a class="nav-link active" href="/aboutus">About Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/product">Product</a>
    </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a class="btn btn-primary" href="/signup">Sign Up</a>
    <a class="btn btn-success" href="/signin">Sign In</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/template/guest.blade.php ENDPATH**/ ?>