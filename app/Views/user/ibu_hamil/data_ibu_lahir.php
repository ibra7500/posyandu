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
                <a href="<?= base_url('Ibu_Hamil/add_data'); ?>" class="btn btn-success">Input Data</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Hamil Keberapa</th>
                            <th>Anak Keberapa</th>
                            <th>HP / HT</th>
                            <th>HPL</th>
                            <th>Skor Rochjati</th>
                            <th>Tanggal Melahirkan</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($ibu_hamil as $data_ibu) : 
                        
                            $hpht = esc($data_ibu['hpht']);
                            $hpht_date = date('d-m-Y', strtotime($hpht));

                            $hpl = esc($data_ibu['hpl']);
                            $hpl_date = date('d-m-Y', strtotime($hpl));

                            $tgl_lahir = esc($data_ibu['tgl_melahirkan']);
                            $tgl_melahirkan = date('d-m-Y', strtotime($tgl_lahir));

                        ?>
                        <tr>
                            <td width= "1%"><?= $no++; ?></td>                           
                            <td><?=esc($data_ibu['nama_ibu_hamil']);?></td>
                            <td><?=esc($data_ibu['umur']);?></td>
                            <td><?=esc($data_ibu['hamil_keberapa']);?></td>
                            <td><?=esc($data_ibu['anak_keberapa']);?></td>
                            <td><?=$hpht_date;?></td>
                            <td><?=$hpl_date;?></td>
                            <td><?=esc($data_ibu['skor_rochjati']);?></td>
                            <td><?=$tgl_melahirkan;?></td>
                            <td class="text-center" width = "20%">
                                <a href="<?= base_url('Ibu_Hamil/detail_data/'.$data_ibu['nik_ibu_hamil']); ?>" class="btn btn-primary">Detail</a>
                                <a href="<?= base_url('Ibu_Hamil/update_data/'.$data_ibu['nik_ibu_hamil']); ?>" class="btn btn-success">Update</a>
                                <a href="#" type="button" data-target="#myModalHapus-<?=$data_ibu['nik_ibu_hamil'];?>" class="btn btn-danger m-1" data-toggle="modal">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="myModalHapus-<?=$data_ibu['nik_ibu_hamil'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus <?=$title?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Apakah anda yakin ingin <b>menghapus</b> <?=$title?> yang bernama <b><?=esc($data_ibu['nama_ibu_hamil']);?></b>?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <a href="<?= base_url('Ibu_Hamil/delete_data/'.$data_ibu['nik_ibu_hamil']); ?>" class="btn btn-danger">Hapus</a>
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