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
            <form action="<?= base_url('Warga_Vaksin/edit_data/'.$vaksin['nik']); ?>" method="POST">
            <div class="form-row">
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK</label>
                    <input type="text" value="<?= $vaksin['nik']; ?>" class="form-control " name="nik" readonly required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama</label>
                    <input type="text" value="<?= $vaksin['nama']; ?>" class="form-control " name="nama" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">No HP</label>
                    <input type="text" value="<?= $vaksin['no_hp']; ?>" class="form-control " name="no_hp" required>
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
                    <label for="" class="font-weight-bold">Tanggal Vaksin Pertama</label>
                    <input name="tgl_vaksin_pertama" type="date" value="<?= $vaksin['tgl_vaksin_pertama']; ?>" class="form-control" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Tempat Vaksin Pertama</label>
                    <input name="tempat_vaksin_pertama" type="text" value="<?= $vaksin['tempat_vaksin_pertama']; ?>" class="form-control" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Jenis Vaksin Pertama</label>
                    <input name="jenis_vaksin_pertama" type="text" value="<?= $vaksin['jenis_vaksin_pertama']; ?>" class="form-control" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Tanggal Vaksin Kedua (Kosongkan jika belum)</label>
                    <input name="tgl_vaksin_kedua" type="date" value="<?= $vaksin['tgl_vaksin_kedua']; ?>" class="form-control">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Tempat Vaksin Kedua (Kosongkan jika belum)</label>
                    <input name="tempat_vaksin_kedua" type="text" value="<?= $vaksin['tempat_vaksin_kedua']; ?>" class="form-control">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Jenis Vaksin Kedua (Kosongkan jika belum)</label>
                    <input name="jenis_vaksin_kedua" type="text" value="<?= $vaksin['jenis_vaksin_kedua']; ?>" class="form-control">
                </div>
               
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Keterangan (Jika Ada)</label>
                    <input type="text" value="<?= $vaksin['keterangan']; ?>" class="form-control " name="keterangan">
                </div>
            </div>

            <div class="form-group-inline my-4">
                    <label for="" class="font-weight-bold">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3" required><?= $vaksin['alamat']; ?></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block">Simpan </button>

            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>