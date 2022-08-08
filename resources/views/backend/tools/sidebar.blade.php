  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Admin RSIA Karunia Bunda</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.blog.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Artikel
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kategori
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.spesialist.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Spesialis Dokter</p>
                  {{-- <span class="badge badge-info right">Comming Soon</span> --}}
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.doctor.index') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Dokter
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.gallery.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Galleri
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.schedule.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Jadwal Prakter Dokter
                {{-- <i class="fas fa-angle-left right"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-header">Laporan</li>
          <li class="nav-item">
            <a href="{{ route('admin.patient-register.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pendaftaran Pasien
                {{-- <i class="fas fa-angle-left right"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-header">Pengaturan</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Ubah Password
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Keluar
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
