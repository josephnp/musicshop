
<?php $__env->startSection('title', 'Sign In'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<div class="content-title">
    <h3>Login to your account</h3>
</div>
<div class="form"> 
    <div class="card">
        <div class="card-body">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value=<?php echo e(Cookie::get('CookieEmail') !== null? Cookie::get('CookieEmail') : ""); ?>>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value=<?php echo e(Cookie::get('CookiePassword') !== null? Cookie::get('CookiePassword') : ""); ?>>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="">Remember Me</label>
                </div>
                <div class="login">
                    <button class="btn btn-success" type="submit">Sign In</button>
                </div>
                <hr>
                <div class="register">
                    <p>Don't have an account yet?</p>
                    <a href="/signup" class="btn btn-primary">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/guest/signin.blade.php ENDPATH**/ ?>