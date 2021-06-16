
<?php $__env->startSection('content'); ?>
<!--main content start-->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Pendidikan</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Pendidikan</h4>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There where some problems with your input.<br><br>
                                    <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="form">
                                <form class="form-validate form-horizontal" id="pendidikan"
                                action="<?php echo e(isset($pendidikan) ? route('pendidikan.update',$pendidikan->id) : route('pendidikan.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>

                                <?php echo isset($pendidikan) ? method_field('PUT') : ''; ?>

                                <input type="hidden" name="id" value="<?php echo e(isset($pendidikan) ? $pendidikan->id : ''); ?>">
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Pendidikan <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="nama" id="nama" minlenght="5" value="<?php echo e(isset($pendidikan) ? $pendidikan->nama : ''); ?>" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Tingkatan <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <select class="form-control m-bot15" name="tingkatan" id="tingkatan" required>
                                        <option value="1" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 1) ? 'selected' : ''); ?>>TK</option>
                                        <option value="2" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 2) ? 'selected' : ''); ?>>SD</option>
                                        <option value="3" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 3) ? 'selected' : ''); ?>>SMP</option>
                                        <option value="4" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 4) ? 'selected' : ''); ?>>SMA/SMK</option>
                                        <option value="5" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 5) ? 'selected' : ''); ?>>D3</option>
                                        <option value="6" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 6) ? 'selected' : ''); ?>>D4/S1</option>
                                        <option value="7" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 7) ? 'selected' : ''); ?>>S2</option>
                                        <option value="8" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 8) ? 'selected' : ''); ?>>S3</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Tahun Masuk <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="tahun_masuk" id="tahun_masuk" value="<?php echo e(isset($pendidikan) ? $pendidikan->tahun_masuk : ''); ?>" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Tahun Selesai <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="tahun_lulus" id="tahun_lulus" value="<?php echo e(isset($pendidikan) ? $pendidikan->tahun_lulus : ''); ?>" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <a href="<?php echo e(route('pendidikan.index')); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
                                    </div>
                                </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('content-css'); ?>
<link href="<?php echo e(asset('backend/css/bootstrap-datepicker.css')); ?>" rel="stylesheet"/ />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('content-js'); ?>
<script src="<?php echo e(asset('backend/js/bootstrap-datepicker.js')); ?>"></script>
<script type="text/javascript">
  $('#tahun_masuk').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
  });
  $('#tahun_lulus').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E41191224_Ferry Septian Ferdiyanto\B_KELOMPOK_2_Website\YOOVIS\resources\views/backend/pendidikan/create.blade.php ENDPATH**/ ?>