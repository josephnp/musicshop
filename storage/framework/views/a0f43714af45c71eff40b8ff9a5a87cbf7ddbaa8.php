<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

        <ul class="nav justify-content-center mb-4">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="/publishers">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/product">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/publishers">Sign In</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Sign Up</a>
            </li>
        </ul>
        <ul>

        </ul>


    <?php echo $__env->yieldContent("body"); ?>
    <footer class="text-bg-primary p-3 text-center">
        <p class="text-white">ⓒ 2021 Baktify, Inc.All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH D:\Documents\binus\Semester 5\Web Programming\ProjectLab\projectlab\resources\views/template.blade.php ENDPATH**/ ?>