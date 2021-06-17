@extends('backend/layouts.template')
@section('content')
<!--main content start-->

<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
      <div class="row align-items-center">
          <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">Profile</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Profile
                    </header>
                    <div class="panel-body">
                        <div class="col-lg-4">
                          <img src="{{ asset('backend/assets/images/users/3.jpg') }}" alt="" width="300px">
                        </div>
                        <div class="col-lg-8">
                          <form class="form-validate form-horizontal" method="post">
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Nama</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="text" name="nama" id="nama" minlenght="5" value="{{ $user->name }}" disabled />
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Username</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="text" name="username" id="username" minlenght="5" value="{{ $user->username }}" disabled/>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Email</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" disabled/>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Role</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="text" name="role" id="role" value="{{ $role->role }}" disabled/>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </section>
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
@endsection

