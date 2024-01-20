<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Laravel Project'); ?></title>
    <style>
        body {
            background: linear-gradient(to left, #7EA0B7, #B1C5D3);
        }

        .welcome-container {
            height: 40vh;
            display: column;
            align-items: center;
            justify-content: center;
            /* background: linear-gradient(45deg, #ffcc33, #ff6666); */
            overflow: hidden;
        }

        .animated-welcome {
            font-size: 3em;
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeInUp 1.5s ease-out 0.5s forwards;
        }

        @keyframes  fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info bg-gradient">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">CRUDaPP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item <?php echo e(Request::is('about') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">Manage</a>
                </li>

                <!-- <li class="nav-item <?php echo e(Request::is('about') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                </li> -->



                <li class="nav-item <?php echo e(Request::is('register') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Add student</a>
                </li>
                <li class="nav-item <?php echo e(Request::is('login') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH /home/nte-826-vm/mylrvl/resources/views/layouts/app.blade.php ENDPATH**/ ?>