<?php $__env->startSection('content'); ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Transaksi</h3>
                    </div>
                    <?php echo e($transaksi); ?>

                    <div>
                        <hr class="mt-0 mb-0">
                    </div>
                    <div class="card-body text-center ">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">Selamat Datang <?php echo e(Auth::user()->name); ?>! Tetap Semangat 🔥</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E41191224_Ferry Septian Ferdiyanto\B_KELOMPOK_2_Website\YOOVIS\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>