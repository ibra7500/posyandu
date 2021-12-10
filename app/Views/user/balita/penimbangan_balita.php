<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    
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
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('Balita'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Balita'); ?>">Data Balita</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
            <h2 class="h3 mb-2 text-gray-800">Data Untuk Penimbangan <?= $balita['nama']; ?></h2>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 px-5 my-2">

                        <form action="<?= base_url('Balita/input_timbang_balita'); ?>" method="POST">

                        <h2 class="mb-4">Form Input Penimbangan</h2>
                        <div class="form-group-inline my-2">
                            <label for="">NIK Balita</label>
                            <input type="text" value="<?= $balita['nik_balita']; ?>" class="form-control col-10" readonly name="nik_balita">
                            <input type="hidden" name="kode_timbang" value="<?= $kode_timbang; ?>">
                        </div>

                        <div class="form-group-inline my-4">
                            <label for="">Nama Balita</label>
                            <input type="text" value="<?= $balita['nama']; ?>" class="form-control col-10" readonly>
                        </div>

                        <div class="form-group-inline my-4">
                            <label for="">Masukkan Berat Badan</label>
                            <input type="text" value="" class="form-control col-10" name="berat_badan">
                        </div>

                        <div class="form-group-inline my-4">
                            <label for="">Masukkan Tinggi Badan</label>
                            <input type="text" value="" class="form-control col-10" name="tinggi_badan">
                        </div>

                        <div class="form-group-inline my-4">
                            <label for="">Masukkan Lingkar Kepala</label>
                            <input type="text" value="" class="form-control col-10" name="lingkar_kepala">
                        </div>

                        <div class="form-group-inline my-4">
                            <label for="">Tanggal Penimbangan</label>
                            <input type="date" value="<?=date("Y-m-d")?>" class="form-control col-10" name="tgl_penimbangan">
                        </div>

                        <button type="submit" class="btn btn-success btn-block col-10">Simpan</button>
                        </form>
                    </div>
                    <div class="col-8 my-2">
                        <h2 class="mb-4">Catatan Penimbangan</h2>                
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                        <th>Timbang ke-</th>
                                        <th>Tanggal Penimbangan</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Lingkar Kepala</th>
                                        <th>Usia</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; 
                                    foreach ($id_timbang as $data_timbang) : 
                                    $tgl_lahir = new DateTime (esc($data_timbang['tgl_lahir']));
                                    $tgl_timbang = new DateTime (esc($data_timbang['tgl_penimbangan']));
                                    
                                    //tahun
                                    $y = $tgl_timbang->diff($tgl_lahir)->y;
                                    //bulan
                                    $m = $tgl_timbang->diff($tgl_lahir)->m;
                                    //hari
                                    $d = $tgl_timbang->diff($tgl_lahir)->d;
                                    
                                    if ($y!=0) {
                                        $tahun = $y.' Tahun';
                                    }
                                    else {
                                        $tahun = '';
                                    }

                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?=esc($data_timbang['tgl_penimbangan']);?></td>                           
                                        <td><?=esc($data_timbang['berat_badan']);?></td>
                                        <td><?=esc($data_timbang['tinggi_badan']);?></td>
                                        <td><?=esc($data_timbang['lingkar_kepala']);?></td> 
                                        <td width="15%"><?=$tahun. " ". $m. " bulan ". $d. " hari ";?></td>
                                        <td class="text-center" width = "15%">
                                            <a href="<?= base_url('Lansia/update_data/'.$data_timbang['nik_balita']); ?>" class="btn btn-success">Update</a>
                                            <a href="#" type="button" data-target="#myModalHapus-<?=$data_timbang['nik_balita'];?>" class="btn btn-danger m-1" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>