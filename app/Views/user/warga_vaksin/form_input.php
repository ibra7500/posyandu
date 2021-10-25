<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('warga_vaksin'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Warga_Vaksin'); ?>">Data Warga Vaksin</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Warga_Vaksin/input_data'); ?>" method="POST">
                <div class=" form-group-inline my-2">
                    <label for="">Masukkan NIK</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nik">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Nama</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nama">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Alamat</label>
                    <input type="text" value="" class="form-control col-lg-5" name="alamat">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan No HP</label>
                    <input type="text" value="" class="form-control col-lg-5" name="no_hp">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control col-lg-5">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Tanggal Vaksin Pertama</label>
                    <input name="tgl_vaksin_pertama" type="date" value="" class="form-control col-lg-5">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Tanggal Vaksin Kedua (Kosongkan jika belum)</label>
                    <input name="tgl_vaksin_kedua" type="date" value="" class="form-control col-lg-5">
                </div>
               
                <div class="form-group-inline my-4">
                    <label for="">Keterangan (Jika Ada)</label>
                    <input type="text" value="" class="form-control col-lg-5" name="keterangan">
                </div>

                <button type="submit" class="btn btn-success">Simpan </button>
            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>