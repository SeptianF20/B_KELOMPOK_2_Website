<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo e(config('app.name')); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('frontend/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('frontend/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr - v4.2.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="<?php echo e(route('user.home')); ?>"><img src="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" alt=""
                            class="img-fluid"></a>
                    <a href="<?php echo e(route('user.home')); ?>">YooVis</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo e(route('user.home')); ?>">Home</a></li>
                    <li class="dropdown"><a href="#services"><span>Service</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="service-smartphone">Service Smartphone</a></li>
                            <li><a href="service-laptop">Service Laptop</a></li>
                            <li><a href="service-printer">Service Printer</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                    <li>
                        <a class="getstarted" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login | Register')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="getstartednew"><b><img
                                    src="<?php echo e(asset('frontend/assets/img/profil.png')); ?>"><?php echo e(Auth::user()-> name); ?></b></a>
                        <ul>
                            <li><a href="<?php echo e(url('profileuser')); ?>">Profile</a></li>
                            <hr>
                            <li><a href="keranjang">Keranjang</a></li>
                            <hr>
                            <li><a href="#"> <a class="dropdown" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a></li><i class="fa fa-sign-out" aria-hidden="true"></i>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?> " method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>

                    </li>
                    <?php endif; ?>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
<?php /**PATH C:\xampp\htdocs\E41191224_Ferry Septian Ferdiyanto\B_KELOMPOK_2_Website\YOOVIS\resources\views/frontend/layouts/navbar.blade.php ENDPATH**/ ?>