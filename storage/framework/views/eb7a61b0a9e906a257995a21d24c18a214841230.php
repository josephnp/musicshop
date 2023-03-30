
<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
    <div class="upper">
        <div class="quote">
            <p>"Hello, it's me, the CEO, I would like to thank all of you for using this website. We are Baktify, the best and most profound music shop in the entire universe. Thank you for always being loyal and trust us."</p>
            <h4>- CEO of Baktify</h4>
        </div>
    </div>
    <div class="lower">
        
        <div class="left-box" id="box">
            <div id="box-title">
                <h5>Contact</h5>
            </div>
            <div id="box-content">
                <p>Phone Number: 0838-8198-7660</p>
                <p>Email: baktifyofficial@gmail.com</p>
                <p>Instagram: @baktify_official</p>
            </div>
        </div>

        
        <div class="right-box" id="box">
            <div id="box-title">
                <h5>Location</h5>
            </div>
            <div id="box-content">
                <p>Jakarta: Jl. Swadaya IV No.10, Cakung 13930</p>
                <p>Bandung: Jl. Jawa No.40, Sumur Bandung 40113</p>
                <p>Medan: Jl. Puri No.154, Medan Area 20211</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/guest/about.blade.php ENDPATH**/ ?>