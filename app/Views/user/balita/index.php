<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold"><?= $title?></h1>

    <?php
        $errors = session()->getFlashdata('gagal');
        if (!empty($errors)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-times"></i> Gagal</strong> data tidak ditambahkan ke dalam database.
                <ul>
                    <?php foreach ($errors as $e) { ?>
                        <li><?= esc($e); ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashData('sukses')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check"></i> Sukses</strong> <?= session()->getFlashData('sukses'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="text-left">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= $title?></li>
                </ol>
                <a href="<?= base_url('Balita/add_data'); ?>" class="btn btn-success">Input Data</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Berat Lahir</th>
                            <th>Panjang Lahir</th>
                            <th>Status Kesehatan</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($balita as $data_balita) : ?>
                        <tr>
                            <td width= "1%"><?= $no++; ?></td>                           
                            <td><?=esc($data_balita['nama']);?></td>
                            <td><?=esc($data_balita['jenis_kelamin']);?></td>
                            <td><?=esc($data_balita['tgl_lahir']);?></td>
                            <td><?=esc($data_balita['berat_lahir']);?></td>
                            <td><?=esc($data_balita['panjang_lahir']);?></td>
                            <td><?=esc($data_balita['status_kesehatan']);?></td>
                            <td class="text-center">
                                <a href="<?= base_url('Balita/detail_data/'.$data_balita['nik_balita']); ?>" class="btn btn-primary m-1">Detail</a>    
                                <a href="<?= base_url('Balita/penimbangan_balita/'.$data_balita['nik_balita']); ?>" class="btn btn-primary m-1">Penimbangan</a>    
                                <a href="<?= base_url('Balita/update_data/'.$data_balita['nik_balita']); ?>" class="btn btn-success m-1">Update</a>
                                <a href="<?= base_url('Balita/delete_data/'.$data_balita['nik_balita']); ?>" class="btn btn-danger m-1">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>                
<!-- /.container-fluid -->
<?= $this->endSection(); ?>