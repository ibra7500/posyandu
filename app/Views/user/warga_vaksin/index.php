<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold"><?= $title ?></h1>

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
                    <li class="breadcrumb-item active"><?= $title ?></li>
                </ol>
                <a href="<?= base_url('Warga_Vaksin/add_data'); ?>" class="btn btn-success">Input Data</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Vaksin Pertama</th>
                            <th>Tanggal Vaksin Kedua</th>
                            <th>Keterangan</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($warga_vaksin as $vaksin) : 
                            $tgl_vaksin_1a = esc($vaksin['tgl_vaksin_pertama']);
                            $tgl_vaksin_1b = date('d-m-Y', strtotime($tgl_vaksin_1a));

                            $tgl_vaksin_2a = esc($vaksin['tgl_vaksin_kedua']);
                            
                        if ($tgl_vaksin_2a == '0000-00-00') {
                            $tgl_vaksin_2b = "-";
                        }
                        else {
                            $tgl_vaksin_2b = date('d-m-Y', strtotime($tgl_vaksin_2a));
                        }
                        ?>
                        <tr>
                            <td width= "1%"><?= $no++; ?></td>                           
                            <td><?=esc($vaksin['nama']);?></td>
                            <td><?=esc($vaksin['alamat']);?></td>
                            <td><?=esc($vaksin['no_hp']);?></td>
                            <td><?=esc($vaksin['jenis_kelamin']);?></td>
                            <td><?=$tgl_vaksin_1b?></td>
                            <td><?=$tgl_vaksin_2b;?></td>
                            <td><?=esc($vaksin['keterangan']);?></td>
                            <td class="text-center" width = "20%">
                                <a href="<?= base_url('Warga_Vaksin/detail_data/'.$vaksin['nik']); ?>" class="btn btn-primary">Detail</a>
                                <a href="<?= base_url('Warga_Vaksin/update_data/'.$vaksin['nik']); ?>" class="btn btn-success">Update</a>
                                <a href="#" type="button" data-target="#myModalHapus-<?=$vaksin['nik'];?>" class="btn btn-danger m-1" data-toggle="modal">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="myModalHapus-<?=$vaksin['nik'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus <?=$title?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Apakah anda yakin ingin <b>menghapus</b> <?=$title?> yang bernama <b><?=esc($vaksin['nama']);?></b>?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <a href="<?= base_url('Warga_Vaksin/delete_data/'.$vaksin['nik']); ?>" class="btn btn-danger">Hapus</a>
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