@extends('user.layouts.master')
@section('content')
          <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Riwayat Pendidikan</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Data</li>
                  <li class="breadcrumb-item active">Pendidikan</li>
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
                <form method="POST" action="{{ route('user.riwayatpendidikan.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Jenjang Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="jenjang_pendidikan" placeholder="Masukkan Jenjang Pendidikab">
                  </div>
                  <div class="form-group">
                    <label>Nama Institusi</label>
                    <input type="text" class="form-control" name="nama_institusi" placeholder="Masukkan Nama Institusi">
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="Masukkan Jurusan">
                  </div>
                  <div class="form-group">
                    <label>Tahun Lulus</label>
                    <input type="text" class="form-control" name="tahun_lulus" placeholder="Masukkan Tahun Lulus">
                  </div>
                  <div class="form-group">
                    <label>IPK</label>
                    <input type="text" class="form-control" name="ipk" placeholder="Masukkan IPK">
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
