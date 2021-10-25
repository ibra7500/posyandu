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
        </div>
        <div class="card-body">
            <form action="<?= base_url('Ibu_Hamil/input_data'); ?>" method="POST">
                <div class=" form-group-inline my-2">
                    <label for="">Masukkan NIK</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nik_ibu_hamil">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Nama</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nama_ibu_hamil">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Umur</label>
                    <input type="text" value="" class="form-control col-lg-5" name="umur">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Hamil Keberapa?</label>
                    <input type="text" value="" class="form-control col-lg-5" name="hamil_keberapa">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Anak Keberapa?</label>
                    <input type="text" value="" class="form-control col-lg-5" name="anak_keberapa">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Hari Pertama Haid Terakhir (HPHT)</label>
                    <input type="text" value="" class="form-control col-lg-5" name="hpht">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Hari Perkiraan Lahir (HPL)</label>
                    <input type="text" value="" class="form-control col-lg-5" name="hpl">
                </div>
               
                <div class="form-group-inline my-4">
                    <label for="">Skor Rochjati </label>
                    <input type="text" value="" class="form-control col-lg-5" name="skor_rochjati">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Nama Suami</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nama_suami">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Alamat</label>
                    <input type="text" value="" class="form-control col-lg-5" name="alamat">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">No. HP</label>
                    <input type="text" value="" class="form-control col-lg-5" name="no_hp">
                </div>

                <button type="submit" class="btn btn-success">Simpan </button>
            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>