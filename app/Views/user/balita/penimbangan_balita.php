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
                    <div class="col-6 px-5 my-2">

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
                            <label for="">Masukkan Tinggi Badan</label>
                            <input type="text" value="" class="form-control col-10" name="tinggi_badan">
                        </div>

                        <div class="form-group-inline my-4">
                            <label for="">Masukkan Berat Badan</label>
                            <input type="text" value="" class="form-control col-10" name="berat_badan">
                        </div>
                        
                        <div class="form-group-inline my-4">
                            <label for="">Masukkan Lingkar Kepala</label>
                            <input type="text" value="" class="form-control col-10" name="lingkar_kepala">
                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                    <div class="col-6 my-2">
                        <h2 class="mb-4">Catatan Penimbangan</h2>
                        <?php $no = 1;

                        foreach ($id_timbang as $data_timbang) : 
                        ?>
                        
                        <h5 class="my-3">Penimbangan Ke-<?= $no++?></h5>

                        <table class="table table-bordered mb-3" id="dataTable">
                            <tr>
                                <td>Berat Badan</td>
                                <td class="text-center">:</td>
                                <td><?=esc($data_timbang['berat_badan']);?></td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan</td>
                                <td class="text-center">:</td>
                                <td><?=esc($data_timbang['tinggi_badan']);?></td>
                            </tr>
                            <tr>
                                <td>Lingkar Kepala</td>
                                <td class="text-center">:</td>
                                <td><?=esc($data_timbang['lingkar_kepala']);?></td>
                            </tr>
                        </table>

                        <?php endforeach; ?>

                    </div>
                </div>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>