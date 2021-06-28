<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PPDB</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($head == "Dashboard") echo "active"; ?>">
        <a class="nav-link" href="<?= base_url('Admin/Dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>

    <li class="nav-item <?php if ($head == "Pendaftaran") echo "active"; ?>">
        <a class="nav-link" href="<?= base_url('Admin/Pendaftaran'); ?>">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Pendaftaran</span></a>
    </li>

    <li class="nav-item <?php if ($head == "Peninjauan") echo "active"; ?>">
        <a class="nav-link" href="<?= base_url('Admin/Peninjauan'); ?>">
            <i class="fas fa-fw fa-calendar-check"></i>
            <span>Peninjauan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Konfigurasi
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($head == "UserSettings") echo "active"; ?>">
        <a class="nav-link" href="<?= base_url('Admin/UserSettings'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>User Settings</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->