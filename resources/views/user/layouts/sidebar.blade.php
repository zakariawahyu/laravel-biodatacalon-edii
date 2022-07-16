   <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
      <img src="{{asset('asset/dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8" />
        <span class="brand-text font-weight-bold">EDII</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
                <img src="{{ asset('asset/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image" />
     
          </div>
          <div class="info">
          <a href="#" class="d-block">{{$users->username}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="/" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">AKUN</li>
            <li class="nav-item has-treeview">
              <a href="{{ route('user.profil.index') }}" class="nav-link {{ Request::is('user/profil')?'active':'' }}"">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profilku
                </p>
              </a>
            </li>
            <li class="nav-header">DATA</li>
            <li class="nav-item has-treeview {{ Request::is('user/riwayatpendidikan')?'menu-open':'' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Riwayat Pendidikan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('user.riwayatpendidikan.index') }}" class="nav-link {{ Request::is('user/riwayatpendidikan')?'active':'' }}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Lihat Riwayat Pendidikan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('user/riwayatpelatihan')?'menu-open':'' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Riwayat Pelatihan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('user.riwayatpelatihan.index') }}"class="nav-link {{ Request::is('user/riwayatpelatihan')?'active':'' }}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Lihat Riwayat Pelatihan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('user/riwayatpekerjaan')?'menu-open':'' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Riwayat Pekerjaan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('user.riwayatpekerjaan.index') }}" class="nav-link {{ Request::is('user/riwayatpekerjaan')?'active':'' }}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Lihat Riwayat Pekerjaan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">DONE</li>
            <li class="nav-item has-treeview">
            <a href="{{route('logout') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt" aria-hidden="true"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
