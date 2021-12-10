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
        <?php endif; 

        if (session()->getFlashData('sukses')) : ?>
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
                            <th>Usia</th>
                            <th>Berat Lahir</th>
                            <th>Panjang Lahir</th>
                            <th>Status Kesehatan</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($balita as $data_balita) : 
                        $tgl_lahir = (esc($data_balita['tgl_lahir']));
                        $tgl_lahir2 = date('d-m-Y', strtotime($tgl_lahir));

                        $berat_lahir = (esc($data_balita['berat_lahir']));
                        $format_berat_lahir = number_format($berat_lahir, 2, ',', '.');

                        $panjang_lahir = (esc($data_balita['panjang_lahir']));
                        $format_panjang_lahir = number_format($panjang_lahir, 2, ',', '.');

                        $tgl_lahir_date = new DateTime (esc($data_balita['tgl_lahir']));
                        $today = new DateTime();

                        //tahun
                        $y = $today->diff($tgl_lahir_date)->y;
                        //bulan
                        $m = $today->diff($tgl_lahir_date)->m;
                        //hari
                        $d = $today->diff($tgl_lahir_date)->d;
                        
                        if ($y!=0) {
                            $tahun = $y.' Tahun';
                        }
                        else {
                            $tahun = '';
                        }
                        ?>
                        <tr>
                            <td width= "1%"><?= $no++; ?></td>                           
                            <td><?=esc($data_balita['nama']);?></td>
                            <td><?=esc($data_balita['jenis_kelamin']);?></td>
                            <td><?=$tgl_lahir2;?></td>
                            <td><?=$tahun. " ". $m. " bulan ". $d. " hari ";?></td>
                            <td><?=$format_berat_lahir?></td>
                            <td><?=$format_panjang_lahir?></td>
                            <td><?=esc($data_balita['status_kesehatan']);?></td>
                            <td class="text-center">
                                <a href="<?= base_url('Balita/detail_data/'.$data_balita['nik_balita']); ?>" class="btn btn-primary m-1">Detail</a>    
                                <a href="<?= base_url('Balita/penimbangan_balita/'.$data_balita['nik_balita']); ?>" class="btn btn-primary m-1">Penimbangan</a>    
                                <a href="<?= base_url('Balita/update_data/'.$data_balita['nik_balita']); ?>" class="btn btn-success m-1">Update</a>
                                <a href="#" type="button" data-target="#myModalHapus-<?=$data_balita['nik_balita'];?>" class="btn btn-danger m-1" data-toggle="modal">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="myModalHapus-<?=$data_balita['nik_balita'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Balita</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Apakah anda yakin ingin <b>menghapus</b> Data Balita yang bernama <b><?=esc($data_balita['nama']);?></b>?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <a href="<?= base_url('Balita/delete_data/'.$data_balita['nik_balita']); ?>" class="btn btn-danger">Hapus</a>
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