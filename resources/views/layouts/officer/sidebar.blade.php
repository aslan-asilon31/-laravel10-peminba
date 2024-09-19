<div class="sidebar-menu">
  <ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ request()->routeIs('officers.dashboard') ? 'active' : '' }}">
      <a href="{{ route('officers.dashboard') }}" class="sidebar-link">
        <i class="bi bi-grid-fill"></i>
        <span>Beranda</span>
      </a>
    </li>

    <li class="sidebar-title">Data Master</li>

    <li class="sidebar-item {{ request()->routeIs('officers.commodities.*') ? 'active' : '' }}">
      <a href="{{ route('officers.commodities.index') }}" class="sidebar-link">
        <i class="bi bi-collection-fill"></i>
        <span>Komoditas</span>
      </a>
    </li>

    <li class="sidebar-item has-sub">
      <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Peminjaman</span>
      </a>
      <ul class="submenu {{ request()->routeIs('officers.borrowings*') ? 'active' : '' }}">
        <li class="submenu-item {{ request()->routeIs('officers.borrowings.index') ? 'active' : '' }}">
          <a href="{{ route('officers.borrowings.index') }}">Peminjaman Hari Ini</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('officers.borrowings-history.index') ? 'active' : '' }}">
          <a href="{{ route('officers.borrowings-history.index') }}">Riwayat Peminjaman</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('officers.borrowings-report.index') ? 'active' : '' }}">
          <a href="{{ route('officers.borrowings-report.index') }}">Laporan</a>
        </li>
      </ul>
    </li>

    <li class="sidebar-title">Manajemen Akun</li>

    <li class="sidebar-item {{ request()->routeIs('officers.students.*') ? 'active' : '' }}">
      <a href="{{ route('officers.students.index') }}" class="sidebar-link">
        <i class="bi bi-people-fill"></i>
        <span>Mahasiswa</span>
      </a>
    </li>

    <li class="sidebar-item {{ request()->routeIs('officers.profile-settings.*') ? 'active' : '' }}">
      <a href="{{ route('officers.profile-settings.index') }}" class="sidebar-link">
        <i class="bi bi-person-fill-gear"></i>
        <span>Pengaturan Profil</span>
      </a>
    </li>

    <li class="sidebar-title"></li>

    <li class="sidebar-item">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <a href="{{ route('logout') }}" class="sidebar-link" id="logout">
          <i class="bi bi-box-arrow-right"></i>
          <span>Keluar</span>
        </a>
      </form>
    </li>
  </ul>
</div>
