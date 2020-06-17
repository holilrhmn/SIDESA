<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/dist/img/librarylogo-01.png')}}" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIDESA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Laporan
              </p>
            </a>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Warga
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.warga.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Warga</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.warga.restore') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemulihan Warga</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Perkebunan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.perkebunan.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Perkebunan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.perkebunan.restore') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemulihan Perkebunan</p>
                    </a>
                  </li>
                </ul>
              </li>
          <li class="nav-item">
            <a href="{{ route('admin.kontak.show') }}" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>Pesan Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.komentar.show') }}" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>Komentar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
