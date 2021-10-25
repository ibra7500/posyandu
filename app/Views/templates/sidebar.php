<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('') ?>">
    <div class="sidebar-brand-icon">
        <i class="far fa-hospital"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Dara Mahkota</div>
</a>
<?php if(in_groups('admin')) : ?>
<!-- Divider -->
<hr class="sidebar-divide">

<!-- Heading -->
<div class="sidebar-heading">
    Manage User
</div>

<!-- Nav Item - User Lists -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
        <i class="fas fa-user"></i>
        <span>User Lists</span></a>
</li>
<?php endif; ?>
<!-- Divider -->
<hr class="sidebar-divide">

<!-- Heading -->
<div class="sidebar-heading">
    Data Posyandu
</div>

<!-- Nav Item - Balita -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('balita'); ?>">
        <i class="fas fa-baby"></i>
        <span>Data Balita</span></a>
</li>

<!-- Nav Item - Ibu Hamil -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('ibu_hamil'); ?>">
        <i class="fas fa-female"></i>
        <span>Data Ibu Hamil</span></a>
</li>

<!-- Nav Item - Lansia -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('lansia'); ?>">
        <i class="fas fa-user"></i>
        <span>Data Lansia</span></a>
</li>

<!-- Nav Item - Warga Sudah Vaksin -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('warga_vaksin'); ?>">
        <i class="fas fa-syringe"></i>
        <span>Data Warga Sudah Vaksin</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divide">
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->