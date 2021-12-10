<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('Lansia'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Lansia'); ?>">Data Lansia</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Lansia/input_data'); ?>" method="POST">

            <div class="form-row">
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK</label>
                    <input type="text" value="" class="form-control " name="nik_lansia" placeholder="Masukkan NIK">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama</label>
                    <input type="text" value="" class="form-control " name="nama_lansia" placeholder="Masukkan Nama">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control ">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" value="" class="form-control" placeholder="Masukkan Tanggal Lahir">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">No HP</label>
                    <input type="text" value="" class="form-control " name="no_hp" placeholder="Masukkan No HP">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Status Kesehatan</label>
                    <input type="text" value="" class="form-control " name="status_kesehatan">
                </div>

            </div>

            <div class="form-group-inline my-4">
                    <label for="" class="font-weight-bold">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan </button>

            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>