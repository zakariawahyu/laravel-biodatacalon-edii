@extends('user.layouts.master')
@section('content')
          <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Riwayat Pelatihan</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Data</li>
                  <li class="breadcrumb-item active">Pelatihan</li>
                </ol>
              </div>
            </div>
          <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
              <div class="float-sm-right">
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-plus-circle"> </i>
                  Tambah Riwayat
                </a>
              </div>
            </div>
          </div>

                    <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Riwayat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ route('user.riwayatpelatihan.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Pelatihan</label>
                    <input type="text" class="form-control" name="nama_pelatihan" placeholder="Masukkan Nama Pelatihan">
                  </div>
                  <div class="form-group">
                    <label>Sertifikat</label>
                    <div class="input-group">
                        <select class="form-control select2" name="sertifikat">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tahun Pelatihan</label>
                    <input type="text" class="form-control" name="tahun_pelatihan" placeholder="Masukkan Tahun Pelatihan">
                  </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
                </div>
                </div>
            </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
        @yield('action-content')
      </div>
@endsection
