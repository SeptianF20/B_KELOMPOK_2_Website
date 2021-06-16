
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
                      <h4 class="card-title">Tabel Pendidikan</h4>
                      <div class="panel-body">
                        <?php if($message = Session::get('success')): ?>
                          <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                          </div>
                        <?php endif; ?>
                        <a href="<?php echo e(route('pendidikan.create')); ?>">
                          <button class="btn btn-primary" type="button"><i class="fa fa-plus"> Tambah</i></button>
                        </a><br><br>
                      <div class="table-responsive">
                        <table class="table table-striped table-advance table-hover">
                          <tbody>
                            <tr>
                              <th><i class="icon_briefcase"></i> Pendidikan</th>
                              <th><i class="icon_document"></i> Gelar</th>
                              <th><i class="icon_calendar"></i> Tahun Masuk</th>
                              <th><i class="icon_calendar"></i> Tahun Selesai</th>
                              <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($item->nama); ?></td>
                                <td>
                                  <?php if($item->tingkatan == 1): ?>
                                    TK
                                  <?php elseif($item->tingkatan == 2): ?>
                                    SD
                                  <?php elseif($item->tingkatan == 3): ?>
                                    SMP
                                  <?php elseif($item->tingkatan == 4): ?>
                                    SMA/SMK
                                  <?php elseif($item->tingkatan == 5): ?>
                                    D3
                                  <?php elseif($item->tingkatan == 6): ?>
                                    D4/S1
                                  <?php elseif($item->tingkatan == 7): ?>
                                    S2
                                  <?php elseif($item->tingkatan == 8): ?>
                                    S3
                                  <?php endif; ?>
                                </td>
                                <td><?php echo e($item->tahun_masuk); ?></td>
                                <td><?php echo e($item->tahun_lulus); ?></td>
                                <td>
                                  <div class="btn-group">
                                    <form action="<?php echo e(route('pendidikan.destroy',$item->id)); ?>" method="POST">
                                      <a href=" <?php echo e(route('pendidikan.edit',$item->id)); ?> " class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                      <button type="submit" class="btn btn-danger" name="button"
                                      onclick="return confirm('Apakah anda yakin menghapus data ini ?')">
                                        <i class="fa fa-trash-o"></i>
                                      </button>
                                    </form>
                                  </div>
                                </td>
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End PAge Content -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <!-- ============================================================== -->
      <!-- End Right sidebar -->
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

<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E41191224_Ferry Septian Ferdiyanto\B_KELOMPOK_2_Website\YOOVIS\resources\views/backend/pendidikan/index.blade.php ENDPATH**/ ?>