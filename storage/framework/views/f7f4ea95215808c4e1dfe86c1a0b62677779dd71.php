
<?php $__env->startSection('title', 'Cart'); ?>

<?php $__env->startSection('content'); ?>
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
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="cart/update/<?php echo e($cart->product_id); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <tr>
                            <td><img src="<?php echo e(asset(trim($cart->picture))); ?>" alt="" height="50px"> <?php echo e($cart->name); ?></td>
                            <td>IDR <?php echo e($cart->price); ?></td>
                            <td><input type="number" name="qty" class="form-control" id="qty" min="0" max="<?php echo e($cart->stock); ?>" value="<?php echo e($cart->qty); ?>"></td>
                            <td>IDR <?php echo e($cart->qty * $cart->price); ?></td>
                            <td><button class="btn btn-primary" type="submit">Update Cart</button></td>
                        </tr>
                    </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <p>Total: IDR <?php echo e($total); ?></p>
        <a href="/checkout" class="btn btn-success">Check Out</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/user/cart.blade.php ENDPATH**/ ?>