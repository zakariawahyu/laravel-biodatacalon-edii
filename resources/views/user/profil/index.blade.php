@extends('user.profil.base')
@section('action-content')
            <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
              <div class="float-right">
                <a class="btn btn-sm bg-gradient-red" href="#" data-toggle="modal" data-target="#modal-default">
                  <i class="fas fa-key"> </i>
                  Reset Password
                </a>
              </div>
                <div class="float-right mr-2 mb-2 bg-gradien">
                <a class="btn btn-sm bg-gradient-blue" href="#" data-toggle="modal" data-target="#modal-edit">
                  <i class="fas fa-edit"> </i>
                  Lengkapi Profile
                </a>
              </div>
            </div>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                      <h1> Reset Password </h1>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-edit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Lengkapi Profile</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="profil/{{Auth::user()->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label" >Posisi Dilamar</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->posisi_dilamar}}" class="form-control" name="posisidilamar" id="inputEmail3" placeholder="Posisi yang ingin dilamar" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->nama_lengkap}}" class="form-control" name="name" id="inputEmail3" placeholder="Nama lengkap" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">No KTP</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->no_ktp}}" class="form-control" name="noktp" id="inputEmail3" placeholder="No KTP" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">TTL</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->ttl}}" class="form-control" name="ttl" id="inputEmail3" placeholder="Tempat, tanggal lahir" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-8">
                            <select name="jeniskelamin" class='form-control'>
                              <option value="l">Laki-Laki</option>
                              <option value="p">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Agama</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->agama}}" class="form-control" name="agama" id="inputEmail3" placeholder="Agama" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Gol Darah</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->gol_darah}}" class="form-control" name="gol_darah" id="inputEmail3" placeholder="Golongan Darah" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Status</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->status}}" class="form-control" name="status" id="inputEmail3" placeholder="Status" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Alamat KTP</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->alamat_ktp}}" class="form-control" name="alamt_ktp" id="inputEmail3" placeholder="Alamat KTP" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Alamat Tinggal</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->alamat_tinggal}}" class="form-control" name="alamat_tinggal" id="inputEmail3" placeholder="Alamat Tinggal" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">No Telp</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->no_telp}}" class="form-control" name="no_telp" id="inputEmail3" placeholder="Nomor Telephone" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Orang Terdekat</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->orang_terdekat}}" class="form-control" name="orang_terdekat" id="inputEmail3" placeholder="Orang terdekat yang bisa dihubungi" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Skill</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->skill}}" class="form-control" name="skill" id="inputEmail3" placeholder="Skill Keahlian" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Bersedia ditempatkan di luar kota</label>
                          <div class="col-sm-8">
                            <select name="bersedia_penempatan" class='form-control'>
                              <option value="y">Ya</option>
                              <option value="n">Tidak</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Gaji yang diharapkan</label>
                          <div class="col-sm-8">
                            <input type="text" value="{{ $users->penghasilan_diharapkan}}" class="form-control" name="gaji" id="inputEmail3" placeholder="Gaji yang diharapkan" />
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                          Submit
                        </button>
                      </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
          </div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                        <img src="{{ asset('asset/dist/img/avatar5.png') }}" class="profile-user-img img-fluid img-circle" alt="User Profile" />
  
                       

                    </div>

                    @if ($users->role == 'user')
                        <h3 class="profile-username text-center">User</h3>
                    @endif

                    <strong>Posisi Dilamar</strong>

                    <p class="text-muted">
                      {{ $users->posisi_dilamar }}
                    </p>

                    <hr>

                    <strong>Nama Lengkap</strong>

                    <p class="text-muted">
                      {{ $users->nama_lengkap }}
                    </p>

                    <hr />

                    <strong>No KTP</strong>

                    <p class="text-muted">
                      {{ $users->no_ktp }}
                    </p>

                    <hr>

                    <strong>Tempat Tanggal Lahir</strong>

                    <p class="text-muted">
                      {{ $users->ttl }}
                    </p>

                    <hr>

                    <strong>Jenis Kelamin</strong>

                    <p class="text-muted">
                      @if ($users->jenis_kelamin == 'l')
                          Laki-Laki
                      @else
                          Perempuan
                      @endif
                    </p>

                    <hr>

                    <strong>Agama</strong>

                    <p class="text-muted">
                      {{ $users->agama }}
                    </p>

                    <hr>

                    <strong>Golongan Darah</strong>

                    <p class="text-muted">
                      {{ $users->gol_darah }}
                    </p>

                    <hr>
                    <strong>Status</strong>

                    <p class="text-muted">
                      {{ $users->status }}
                    </p>

                    <hr>

                    <strong>Alamat KTP</strong>

                    <p class="text-muted">
                      {{ $users->alamat_ktp }}
                    </p>

                    <hr>

                    <strong>Alamat Tinggal</strong>

                    <p class="text-muted">
                      {{ $users->alamat_tinggal }}
                    </p>

                    <hr>
                    <strong>No Telp</strong>

                    <p class="text-muted">
                      {{ $users->no_telp }}
                    </p>

                    <hr>
                    <strong>Orang Terdekat yang Bisa Dihubungi</strong>

                    <p class="text-muted">
                      {{ $users->orang_terdekat }}
                    </p>

                    <hr>
                    <strong>Bersedia Ditempatkan Di Seluruh Kantor Perusahaan</strong>

                    <p class="text-muted">
                     @if ($users->bersedia_penempatan == 'y')
                         Ya
                    @else
                        Tidak
                     @endif 
                    </p>

                    <hr>
                    <strong>Penghasilan yang Diharapkan</strong>

                    <p class="text-muted">
                      {{ $users->penghasilan_diharapkan }}
                    </p>

                    <hr>

                    <strong>Username</strong>

                    <p class="text-muted">{{ $users->username }}</p>

                    <hr />

                    <strong>Email</strong>

                    <p class="text-muted">{{ $users->email }}</p>

                    <hr />

                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <!-- /.card -->
        </section>
@endsection
