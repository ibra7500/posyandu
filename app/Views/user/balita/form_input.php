<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    <?php
     if (session()->getFlashData('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-times"></i> Gagal </strong> <?= session()->getFlashData('error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php endif;
    ?>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('Balita'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Balita'); ?>">Data Balita</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Balita/input_data'); ?>" method="POST">

            <div class="form-row">

                <!-- NIK BALITA -->
                <div class="form-group col-4 my-3"> 
                    <label for="" class="font-weight-bold">NIK Balita</label>
                    <input type="text" value="" class="form-control" name="nik_balita" placeholder="Masukkan NIK Balita" required>
                </div>

                <!-- NAMA BALITA -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama Balita</label>
                    <input type="text" value="" class="form-control" name="nama_balita" placeholder="Masukkan Nama Balita" required>
                </div>

                <!-- TGL LAHIR -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" value="" class="form-control" required>
                </div>

                <!-- JENIS KELAMIN -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <!-- BERAT LAHIR -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Berat Lahir</label>
                    <input type="text" value="" class="form-control" name="berat_lahir" placeholder="Masukkan Berat Lahir" required>
                </div>

                <!-- PANJANG LAHIR -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Panjang Lahir</label>
                    <input type="text" value="" class="form-control" name="panjang_lahir" placeholder="Masukkan Panjang Lahir" required>
                </div>

                <!-- STATUS -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Status Kesehatan</label>
                    <select name="status_kesehatan" id="" class="form-control" required>
                        <option value="">Pilih Status</option>
                        <option value="Gizi Buruk" class="font-weight-bold">Gizi Buruk</option>
                        <option value="Gizi Kurang" class="font-weight-bold">Gizi Kurang</option>
                        <option value="Gizi Baik" class="font-weight-bold">Gizi Baik</option>
                        <option value="Gizi Lebih" class="font-weight-bold">Gizi Lebih</option>
                    </select>
                </div>

                <!-- NIK AYAH -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Ayah</label>
                    <input type="text" value="" class="form-control" name="nik_ayah" placeholder="Masukkan NIK Ayah" required>
                </div>

                <!-- NIK IBU -->
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Ibu</label>
                    <input type="text" value="" class="form-control" name="nik_ibu" placeholder="Masukkan NIK Ibu" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success mx-auto mt-2 btn-block">Simpan</button>
            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>