<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    

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

                <div class=" form-group-inline my-2">
                    <label for="">Masukkan NIK Balita</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nik_balita">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Nama Balita</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nama_balita">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control col-lg-5">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" value="" class="form-control col-lg-5">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Berat Lahir</label>
                    <input type="text" value="" class="form-control col-lg-5" name="berat_lahir">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Panjang Lahir</label>
                    <input type="text" value="" class="form-control col-lg-5" name="panjang_lahir">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Status Kesehatan</label>
                    <input type="text" value="" class="form-control col-lg-5" name="status_kesehatan">
                </div>

                <div class=" form-group-inline my-2">
                    <label for="">Masukkan NIK Ayah</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nik_ayah">
                </div>

                <div class=" form-group-inline my-2">
                    <label for="">Masukkan Nama Ayah</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nama_ayah">
                </div>

                <div class=" form-group-inline my-2">
                    <label for="">Masukkan NIK Ibu</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nik_ibu">
                </div>

                <div class=" form-group-inline my-2">
                    <label for="">Masukkan Nama Ibu</label>
                    <input type="text" value="" class="form-control col-lg-5" name="nama_ibu">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan Alamat</label>
                    <input type="text" value="" class="form-control col-lg-5" name="alamat">
                </div>

                <div class="form-group-inline my-4">
                    <label for="">Masukkan No HP Orang Tua</label>
                    <input type="text" value="" class="form-control col-lg-5" name="no_hp_ortu">
                </div>
               


                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>