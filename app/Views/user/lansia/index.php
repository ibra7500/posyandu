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
                <a href="<?= base_url('Lansia/add_data'); ?>" class="btn btn-success">Input Data</a>
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
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Tanggal Lahir</th>
                            <th>Status Kesehatan</th>
                            <th>Tanggal Meninggal</th>
                            <th>Keterangan</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($lansia as $data_lansia) : ?>
                        <tr>
                            <td width= "1%"><?= $no++; ?></td>                           
                            <td><?=esc($data_lansia['nama']);?></td>
                            <td><?=esc($data_lansia['jenis_kelamin']);?></td>
                            <td><?=esc($data_lansia['alamat']);?></td>
                            <td><?=esc($data_lansia['no_hp']);?></td>
                            <td><?=esc($data_lansia['tgl_lahir']);?></td>
                            <td><?=esc($data_lansia['status_kesehatan']);?></td>
                            <td><?=esc($data_lansia['tgl_meninggal']);?></td>
                            <td><?=esc($data_lansia['keterangan']);?></td>
                            <td class="text-center" width = "20%">
                                <a href="<?= base_url('Lansia/update_data/'.$data_lansia['nik_lansia']); ?>" class="btn btn-success">Update</a>
                                <a href="#" type="button" data-target="#myModalHapus-<?=$data_lansia['nik_lansia'];?>" class="btn btn-danger m-1" data-toggle="modal">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="myModalHapus-<?=$data_lansia['nik_lansia'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus <?=$title?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Apakah anda yakin ingin <b>menghapus</b> <?=$title?> yang bernama <b><?=esc($data_lansia['nama']);?></b>?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <a href="<?= base_url('Lansia/delete_data/'.$data_lansia['nik_lansia']); ?>" class="btn btn-danger">Hapus</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>                
<!-- /.container-fluid -->
<?= $this->endSection(); ?>