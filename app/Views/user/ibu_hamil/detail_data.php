<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('Ibu_Hamil'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Ibu_Hamil'); ?>">Data Ibu Hamil</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
            <h2 class="h3 mb-2 text-gray-800">Data Untuk <?= $ibu_hamil['nama_ibu_hamil']; ?></h2>
        </div>
        <div class="card-body">

                <div class="form-group-inline my-2 mb-2">
                    <label for="">NIK</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['nik_ibu_hamil']; ?></label>
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Nama Lengkap</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['nama_ibu_hamil']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Umur</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['umur']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Hamil Ke</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['hamil_keberapa']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Anak Ke</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['anak_keberapa']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Hari Pertama Haid Terakhir (HPHT)</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['hpht']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Hari Perkiraan Lahir (HPL)</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['hpl']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Skor Rochjati</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['skor_rochjati']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Nama Suami</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['nama_suami']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Alamat</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['alamat']; ?></label> 
                </div>

                <div class="form-group-inline my-4">
                    <label for="">No. HP</label>
                    <label for="">:</label>
                    <label for=""><?= $ibu_hamil['no_hp']; ?></label> 
                </div>

        </div>
    </div>

</div> 

<?= $this->endSection(); ?>