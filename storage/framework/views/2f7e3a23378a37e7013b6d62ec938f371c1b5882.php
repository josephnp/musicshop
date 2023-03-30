
<?php $__env->startSection('title', 'Sign Up'); ?>
    
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
    <div class="content-title">
        <h3>Register Here</h3>
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
                <form action="<?php echo e(route('register')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name')); ?>">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value="<?php echo e(old('email')); ?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="address">Address</label><br>
                                        <textarea name="address" id="address" cols="79" rows="5"><?php echo e(old('address')); ?></textarea>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo e(old('phone')); ?>">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-success" type="submit">Create Account</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/guest/signup.blade.php ENDPATH**/ ?>