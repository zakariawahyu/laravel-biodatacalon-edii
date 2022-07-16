@extends('admin.users.base')
@section('action-content')
          <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tabel Data Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table id="tableUser" class="table table-bordered table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Posisi Dilamar</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($user as $us)
                      <tr>
                      <td>{{$no++}}</td>
                      <td>{{$us->username}}</td>
                      <td>{{$us->nama_lengkap}}</td>
                      <td>{{ $us->email }}</td>
                    <td>{{ $us->role }}</td>
                    <td>{{ $us->posisi_dilamar }}</td>
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
