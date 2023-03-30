
<?php $__env->startSection('title', 'Update Profile'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
    <div class="content-title">
        <h2>Update your profile</h2>
    </div>
    <div class="content-body">
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
                <form action="<?php echo e(route('updateprofile')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <div class="form-group">
                                    <th scope="row"><label for="name">Name: </label></th>
                                    <td><input type="text" name="name" class="form-control" id="name" value="<?php echo e(Auth::user()->name); ?>"></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <th scope="row"><label for="email">Email: </label></th>
                                    <td><input type="text" name="email" class="form-control" id="email" value="<?php echo e(Auth::user()->email); ?>" disabled></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <th scope="row"><label for="password">Password: </label></th>
                                    <td><input type="password" name="password" class="form-control" id="password"></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <th scope="row"><label for="password_confirmation">Confirmation Password: </label></th>
                                    <td><input type="password" name="password_confirmation" class="form-control" id="password_confirmation"></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <th scope="row"><label for="address">Address: </label></th>
                                    <td><input type="text" name="address" class="form-control" id="address" value="<?php echo e(Auth::user()->address); ?>"></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <th scope="row"><label for="phone">Phone Number: </label></th>
                                    <td><input type="text" name="phone" class="form-control" id="phone" value="<?php echo e(Auth::user()->phone); ?>"></td>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                    <div class="buttons">
                        <a href="/profile" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/user/update.blade.php ENDPATH**/ ?>