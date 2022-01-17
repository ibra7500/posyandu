<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    <?php
     if (session()->getFlashData('error_koma')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-times"></i> Gagal </strong> <?= session()->getFlashData('error_koma'); ?>
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
            <form action="<?= base_url('Balita/edit_data/'.$balita['nik_balita']); ?>" method="POST">

            <?php
            $berat_lahir = esc($balita['berat_lahir']);
            $format_berat_lahir = number_format($berat_lahir, 2, ',', '.');

            $panjang_lahir = esc($balita['panjang_lahir']);
            $format_panjang_lahir = number_format($panjang_lahir, 2, ',', '.');
            ?>
            
            <div class="form-row">
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Balita</label>
                    <input type="text" value="<?= $balita['nik_balita']; ?>" class="form-control " name="nik_balita" readonly>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama</label>
                    <input type="text" value="<?= $balita['nama']; ?>" class="form-control " name="nama_balita" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" value="<?= $balita['tgl_lahir']; ?>" class="form-control" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Berat Lahir</label>
                    <input type="text" value="<?=$format_berat_lahir?>" class="form-control " name="berat_lahir" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Panjang Lahir</label>
<<<<<<< HEAD
                    <input type="text" value="<?=$format_panjang_lahir?>" class="form-control " name="panjang_lahir" required>
=======
                    <input type="text" value="<?=$format_panjang_lahir?>" class="form-control " name="panjang_lahir">
>>>>>>> 5f12255ad47337144b8f758022ec9719402e75c3
                </div>
               
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

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Ayah</label>
<<<<<<< HEAD
                    <input type="text" value="<?= $balita['nik_ayah']; ?>" class="form-control " name="nik_ayah" required>
=======
                    <input type="text" value="<?= $balita['nik_ayah']; ?>" class="form-control " name="nik_ayah">
>>>>>>> 5f12255ad47337144b8f758022ec9719402e75c3
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Ibu</label>
<<<<<<< HEAD
                    <input type="text" value="<?= $balita['nik_ibu']; ?>" class="form-control " name="nik_ibu" required>
=======
                    <input type="text" value="<?= $balita['nik_ibu']; ?>" class="form-control " name="nik_ibu">
>>>>>>> 5f12255ad47337144b8f758022ec9719402e75c3
                </div>
                
            </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>