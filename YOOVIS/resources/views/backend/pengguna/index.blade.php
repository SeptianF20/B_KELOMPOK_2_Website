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
              <h3 class="page-title mb-0 p-0">User</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">User</li>
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
                      <h4 class="card-title">Tabel User</h4>
                      <div class="panel-body">
                        @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                            <p>{{ $message }}</p>
                          </div>
                        @endif
                      <div class="table-responsive">
                        <table class="table table-striped table-advance table-hover">
                          <tbody>
                            <tr>
                              <th><i class="icon_briefcase"></i> Nama</th>
                              <th><i class="icon_document"></i> Username</th>
                              <th><i class="icon_calendar"></i> Email</th>
                              <th><i class="icon_calendar"></i> Role</th>
                            </tr>
                            @foreach ($users as $item)
                              <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->username}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role}}</td>
                              </tr>
                            @endforeach
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
@endsection
