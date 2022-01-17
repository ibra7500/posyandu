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
    <a class="nav-link" href="<?= base_url('Admin'); ?>">
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

<!-- Nav Item - Balita dan Orang Tua -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesBalita"
    aria-expanded="true" aria-controls="collapsePages"> 
        <i class="fas fa-baby"></i>
        <span>Balita dan Orang Tua</span>
    </a>
    <div id="collapsePagesBalita" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Balita'); ?>">Data Balita</a>
            <a class="collapse-item" href="<?= base_url('Orang_Tua'); ?>">Data Orang Tua</a>
        </div>
    </div> 
</li>


<!-- Nav Item - Ibu Hamil -->

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesIbu"
    aria-expanded="true" aria-controls="collapsePages"> 
        <i class="fas fa-female"></i>
        <span>Data Ibu Hamil</span>
    </a>
    <div id="collapsePagesIbu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Ibu_Hamil'); ?>">Ibu Hamil</a>
            <a class="collapse-item" href="<?= base_url('Ibu_Hamil/lahir'); ?>">Ibu yang sudah Melahirkan</a>
        </div>
    </div> 
</li>

<!-- Nav Item - Lansia -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Lansia'); ?>">
        <i class="fas fa-user"></i>
        <span>Data Lansia</span></a>
</li>

<!-- Nav Item - Warga Sudah Vaksin -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Warga_Vaksin'); ?>">
        <i class="fas fa-syringe"></i>
        <span>Data Warga Vaksin COVID</span></a>
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