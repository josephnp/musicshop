<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/template.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="/"><img src="<?php echo e(asset('storage/images/logo.png')); ?>" alt="" height="60px"></a> 
        </div>
        <div class="nav">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <?php echo $__env->yieldContent('navbar'); ?>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        <div class="actions">
            <?php echo $__env->yieldContent('actions'); ?>
        </div>
    </div>
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="footer">
        <h6>© 2022 Baktify, Inc. All rights reserved.</h6>
    </div>
</body>
</html><?php /**PATH C:\Users\ASUS\Desktop\Joseph\BINUS\Semester 5\Web Programming\LAB\Project\project\resources\views/template/template.blade.php ENDPATH**/ ?>