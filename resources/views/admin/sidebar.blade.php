<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
      <a href="{{ route('home') }}">
        {{ auth()->user()->name }}
      </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3">

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item has-treeview " >
              <a href="{{route('child.index')}}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt" ></i>
                <p>
                  Halaman Anak
                </p>
              </a>
          </li>
          <li class="nav-item has-treeview " >
            <a href="{{route('kipi.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt" ></i>
              <p>
                Halaman KIPI
              </p>
            </a>
        </li>
          <li class="nav-item has-treeview  {{ request()->is('gizi','gizi/*')}}">
            <a href="#" class="nav-link {{request()->is('gizi','gizi/*') }}">
              <i class="nav-icon fas fa-tachometer-alt" ></i>
              <p>
                Halaman Gizi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('gizi.index')}}"  class="nav-link {{ request()->is('gizi.index','gizi.index') ? 'active':'' }}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tinggi Badan </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('gizi.list-bb')}}"  class="nav-link {{ request()->is('gizi.list-bb','gizi.list-bb') ? 'active':'' }}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berat Badan </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('gizi.list.head')}}"  class="nav-link {{ request()->is('gizi.list.head','gizi.list.head') ? 'active':'' }}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lingkar Kepala </p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview " >
            <a href="{{route('kpsp.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt" ></i>
              <p>
                Halaman KPSP
              </p>
            </a>
        </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
