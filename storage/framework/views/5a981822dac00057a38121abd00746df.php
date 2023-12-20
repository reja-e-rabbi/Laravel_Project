<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo !empty($meta_title)? $meta_title : ''; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(url('img/favicon.png')); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(url('lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
  </div>
<!-- Spinner End -->
<!-- navbar start -->
  <?php echo $__env->make('layouts._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(url('lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/typed/typed.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/isotope/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/lightbox/js/lightbox.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(url('js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Apache24\htdocs\laravelapp.me\resources\views/layouts/app.blade.php ENDPATH**/ ?>