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
                        <h4 class="card-title">Form User</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There where some problems with your input.<br><br>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form">
                                <form class="form-validate form-horizontal" id="pendidikan"
                                action="{{ isset($user) ? route('pengguna.update',$user->id) : route('pengguna.store') }}" method="post">
                                {!! csrf_field() !!}
                                {!! isset($user) ? method_field('PUT') : '' !!}
                                <input type="hidden" name="id" value="{{ isset($user) ? $user->id : ''}}">
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Name <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="nama" id="nama" minlenght="5" value="{{ isset($users) ? $user->nama : ''}}" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Username <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="tahun_masuk" id="tahun_masuk" value="{{ isset($user) ? $user->tahun_masuk : ''}}" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Email <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="tahun_masuk" id="tahun_masuk" value="{{ isset($user) ? $user->tahun_masuk : ''}}" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Role <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="tahun_lulus" id="tahun_lulus" value="{{ isset($user) ? $user->tahun_lulus : ''}}" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <a href="{{ route('pengguna.index') }}"><button class="btn btn-default" type="button">Cancel</button></a>
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
@endsection
@push('content-css')
<link href="{{asset('backend/css/bootstrap-datepicker.css')}}" rel="stylesheet"/ />
@endpush
@push('content-js')
<script src="{{asset('backend/js/bootstrap-datepicker.js')}}"></script>
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
@endpush