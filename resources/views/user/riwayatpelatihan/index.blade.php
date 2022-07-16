@extends('user.riwayatpelatihan.base')
@section('action-content')

<!-- Main content -->
<section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tabel Data Pelatihan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tableUser" class="table table-bordered table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelatihan</th>
                        <th scope="col">Sertifikat</th>
                        <th scope="col">Tahun</th>
                      </tr>
                    </thead>

                    <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($pelatihan as $pl)
                      <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $pl->nama_pelatihan }}</td>
                      <td>{{ $pl->sertifikat }}</td>
                      <td>{{ $pl->tahun_riwayat_pelatihan }}</td>
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
