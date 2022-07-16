@extends('user.riwayatpekerjaan.base')
@section('action-content')

<!-- Main content -->
<section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tabel Data Pekerjaan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tableUser" class="table table-bordered table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Posisi Terakhir</th>
                        <th scope="col">Pendapatan Terakhir</th>
                        <th scope="col">Tahun</th>
                      </tr>
                    </thead>

                    <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($pekerjaan as $pj)
                      <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $pj->nama_perusahaan }}</td>
                      <td>{{ $pj->posisi_terakhir }}</td>
                      <td>{{  $pj->pendapatan_terakhir}}</td>
                      <td>{{ $pj->tahun_riwayat_pekerjaan }}</td>
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
