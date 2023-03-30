
<?php $__env->startSection('title', 'Your Profile'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
    <div class="content-title">
        <h2>Hello, <?php echo e(Auth::user()->name); ?></h2>
    </div>
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th scope="row">Name: </th>
                            <td><p><?php echo e(Auth::user()->name); ?></p></td>
                        </tr>
                        <tr>
                            <th scope="row">Email: </th>
                            <td><p><?php echo e(Auth::user()->email); ?></p></td>
                        </tr>
                        <tr>
                            <th scope="row">Password: </th>
                            <td><p>••••••••••</p></td>
                        </tr>
                        <tr>
                            <th scope="row">Address: </th>
                            <td><p><?php echo e(Auth::user()->address); ?></p></td>
                        </tr>
                        <tr>
                            <th scope="row">Phone: </th>
                            <td><p><?php echo e(Auth::user()->phone); ?></p></td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <a href="/profile/update" class="btn btn-primary">Update</a>
                    <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger">Log out</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/user/profile.blade.php ENDPATH**/ ?>