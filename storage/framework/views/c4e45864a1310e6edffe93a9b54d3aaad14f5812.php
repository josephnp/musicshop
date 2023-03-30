
<?php $__env->startSection('title', 'Transactions'); ?>
    
<?php $__env->startSection('content'); ?>
    <?php if(count($transactions) == 0): ?>
        <h2>You have no transactions</h2>
    <?php else: ?>
        <?php $__currentLoopData = $timestamps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timestamp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <b><?php echo e($timestamp->created_at); ?></b>
            <div class="card">
                <div class="card-body">
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
                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($transaction->created_at == $timestamp->created_at): ?>
                                    <tr>
                                        <td><img src="<?php echo e(asset(trim($transaction->picture))); ?>" alt="" height="50px"> <?php echo e($transaction->name); ?></td>
                                        <td>IDR <?php echo e($transaction->price); ?></td>
                                        <td><?php echo e($transaction->qty); ?></td>
                                        <td>IDR <?php echo e($transaction->qty * $transaction->price); ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <b>Total: IDR <?php echo e($timestamp->total); ?></b>
                </div>
            </div>
            <hr>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/user/transaction.blade.php ENDPATH**/ ?>