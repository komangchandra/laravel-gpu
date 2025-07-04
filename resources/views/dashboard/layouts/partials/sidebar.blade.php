<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">GPU Fuel</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('dashboard') || Request::is('dashboard/profiles*') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Master Data
  </div>

  {{-- <li class="nav-item {{ Request::is('dashboard/categories*') || Request::is('dashboard/products*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cogs"></i>
      <span>Data Alat</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">List Alat:</h6>
        <a class="collapse-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
          href="x">Kategori Alat</a>
        <a class="collapse-item {{ Request::is('dashboard/units*') ? 'active' : '' }}"
          href="{{ route('units.index') }}">Unit</a>
      </div>
    </div>
  </li>  --}}

  {{-- <li class="nav-item {{ Request::is('dashboard/units*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('units.index') }}">
      <i class="fas fa-fw fa-cogs"></i>
      <span>Data Unit</span></a>
  </li>

  <li class="nav-item {{ Request::is('dashboard/fuel-trucks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('fuels.index') }}">
      <i class="fas fa-fw fa-truck"></i>
      <span>Fuel Truck</span></a>
  </li>

  <li class="nav-item {{ Request::is('dashboard/users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Data Fuel Man</span></a>
  </li>  --}}

  <li class="nav-item {{ Request::is('dashboard/transactions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('transactions.index') }}">
      <i class="fas fa-fw fa-credit-card"></i>
      <span>Transaksi Solar</span></a>
  </li>

  <!-- <li class="nav-item {{ Request::is('dashboard/sales*') ? 'active' : '' }}">
    <a class="nav-link" href="('sales.index') }}">
      <i class="fas fa-fw fa-cart-plus"></i>
      <span>Data Penjualan</span></a>
  </li> -->

  <!-- Nav Item - Tables -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li> -->

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
