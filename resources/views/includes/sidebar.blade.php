<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-text mx-3"><i class="fas fa-tasks"></i> Management Pulsa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-home"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>

    <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('buyers.index') }}"> 
        <i class="fas fa-poll"></i>
      <span>Lihat pembeli</span>
    </a>
    <a class="nav-link collapsed" href="{{ route('buyers.create') }}">
        <i class="fas fa-user-plus"></i>
      <span>Tambah pembeli</span>
    </a>
    <a class="nav-link collapsed" href="{{ route('transactions.index') }}">
        <i class="fas fa-comment-dollar"></i>
      <span>Lihat transaksi</span>
    </a>


    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->