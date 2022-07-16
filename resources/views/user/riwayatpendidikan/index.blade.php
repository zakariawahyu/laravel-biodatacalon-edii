@extends('user.riwayatpendidikan.base')
@section('action-content')

<!-- Main content -->
<section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tabel Data Pendidikan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tableUser" class="table table-bordered table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenjang Pendidikan</th>
                        <th scope="col">Nama Institusi</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">IPK</th>
                      </tr>
                    </thead>

                    <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($pendidikan as $pk)
                      <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $pk->jenjang_pend_terakhir }}</td>
                      <td>{{ $pk->nama_instansi }}</td>
                      <td>{{ $pk->jurusan }}</td>
                      <td>{{ $pk->tahun_lulus }}</td>
                      <td>{{ $pk->ipk }}</td>
                      </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
</section>
@endsection
