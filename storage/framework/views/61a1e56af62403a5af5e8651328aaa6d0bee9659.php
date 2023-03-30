
<?php $__env->startSection('title', 'Check Out'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
    <?php if(count($carts) == 0): ?>
        <h2>Your cart is empty</h2>
    <?php else: ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(asset(trim($cart->picture))); ?>" alt="" height="50px"> <?php echo e($cart->name); ?></td>
                        <td>IDR <?php echo e($cart->price); ?></td>
                        <td><?php echo e($cart->qty); ?></td>
                        <td>IDR <?php echo e($cart->qty * $cart->price); ?></td>
                    </tr>
                    </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <p>Ship to: <b><?php echo e(Auth::user()->address); ?></b></p>
        <p>Total: <b>IDR <?php echo e($total); ?></b></p>

        <form action="/checkout/<?php echo e($passcode); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="passcode">Please enter the following passcode: <?php echo e($passcode); ?></label>
                <input type="text" name="passcode" id="passcode" class="form-control" width="30px">
            </div>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-success">Confirm</button>
        </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/user/checkout.blade.php ENDPATH**/ ?>