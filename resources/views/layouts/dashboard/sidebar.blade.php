<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand" style="margin-right: 1px">
            <img src="{{asset('assets/img/logo/logo5.png')}}" alt="" width="100px">
            {{-- <a href="index.html">Dianterin</a> --}}
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">DN</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->routeIS('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">Manajemen Kantor</li>
            <li class="{{ request()->routeIS('kantor.index') ? 'active' : '' }}">
                <a href="{{ route('kantor.index') }}" class="nav-link"><i class="fas fa-building"></i><span>Data Kantor</span></a>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">Manajemen Paket</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-box"></i><span>Manajemen Paket</span></a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIS('paket.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('paket.index') }}"><i class="fas fa-box"></i>Paket</a></li>
                <li><a class="nav-link" href="#"><i class="fas fa-shipping-fast"></i>Trucking</a></li>
                <li><a class="nav-link" href="#"><i class="fas fa-users"></i>Kurir</a></li>
                <li><a class="nav-link" href="#"><i class="fas fa-tags"></i>Harga</a></li>
              </ul>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Manajemen Pengguna</li>
            <li class="">
                <a href="#" class="nav-link"><i class="fas fa-users"></i><span>Data Pengguna</span></a>
            </li>
        </ul>


        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{route('index')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Dianterin
            </a>
        </div>
    </aside>
</div>
