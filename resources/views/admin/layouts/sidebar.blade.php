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
              <a href="/admin" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">AKUN</li>
            <li class="nav-item has-treeview">
            <a href="{{ route('admin.profil.index') }}#" class="nav-link {{ Request::is('admin/profil')?'active':'' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profilku
                </p>
              </a>
            </li>
            <li class="nav-header">DATA</li>
            <li class="nav-item has-treeview {{ Request::is('admin/users')?'menu-open':'' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::is('admin/users')?'active':'' }}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Lihat Data User</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">DONE</li>
            <li class="nav-item has-treeview">
            <a href="{{route('logout')}}" class="nav-link">
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
