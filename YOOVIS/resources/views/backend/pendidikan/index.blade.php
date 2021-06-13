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
                        @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                            <p>{{ $message }}</p>
                          </div>
                        @endif
                        <a href="{{ route('pendidikan.create') }}">
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
                            @foreach ($pendidikan as $item)
                              <tr>
                                <td>{{$item->nama}}</td>
                                <td>
                                  @if ($item->tingkatan == 1)
                                    TK
                                  @elseif ($item->tingkatan == 2)
                                    SD
                                  @elseif ($item->tingkatan == 3)
                                    SMP
                                  @elseif ($item->tingkatan == 4)
                                    SMA/SMK
                                  @elseif ($item->tingkatan == 5)
                                    D3
                                  @elseif ($item->tingkatan == 6)
                                    D4/S1
                                  @elseif ($item->tingkatan == 7)
                                    S2
                                  @elseif ($item->tingkatan == 8)
                                    S3
                                  @endif
                                </td>
                                <td>{{$item->tahun_masuk}}</td>
                                <td>{{$item->tahun_lulus}}</td>
                                <td>
                                  <div class="btn-group">
                                    <form action="{{ route('pendidikan.destroy',$item->id)}}" method="POST">
                                      <a href=" {{ route('pendidikan.edit',$item->id) }} " class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger" name="button"
                                      onclick="return confirm('Apakah anda yakin menghapus data ini ?')">
                                        <i class="fa fa-trash-o"></i>
                                      </button>
                                    </form>
                                  </div>
                                </td>
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
