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
            <form action="<?= base_url('Ibu_Hamil/edit_data/'.$ibu_hamil['nik_ibu_hamil']); ?>" method="POST">
            
            <div class="form-row">
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK</label>
                    <input type="text" value="<?= $ibu_hamil['nik_ibu_hamil']; ?>" class="form-control " name="nik_ibu_hamil" readonly required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama</label>
                    <input type="text" value="<?= $ibu_hamil['nama_ibu_hamil']; ?>" class="form-control " name="nama_ibu_hamil" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Umur</label>
                    <input type="text" value="<?= $ibu_hamil['umur']; ?>" class="form-control " name="umur" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Hamil Keberapa?</label>
                    <input type="text" value="<?= $ibu_hamil['hamil_keberapa']; ?>" class="form-control " name="hamil_keberapa" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Anak Keberapa?</label>
                    <input type="text" value="<?= $ibu_hamil['anak_keberapa']; ?>" class="form-control " name="anak_keberapa" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Hari Pertama Haid Terakhir (HPHT)</label>
                    <input type="date" value="<?= $ibu_hamil['hpht']; ?>" class="form-control " name="hpht" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Skor Rochjati </label>
                    <input type="text" value="<?= $ibu_hamil['skor_rochjati']; ?>" class="form-control " name="skor_rochjati" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Status</label>
                    <select name="status" id="" class="form-control" required>
                        <option value="">Pilih Status</option>
                        <option value="1" class="font-weight-bold">Sedang Hamil</option>
                        <option value="2" class="font-weight-bold">Mengalami Keguguran</option>
                        <option value="0" class="font-weight-bold">Sudah Melahirkan</option>
                    </select>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Tanggal Melahirkan (Kosongkan jika belum)</label>
                    <input type="date" value="<?= $ibu_hamil['tgl_melahirkan']; ?>" class="form-control " name="tgl_melahirkan">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Skor Rochjati </label>
                    <input type="text" value="<?= $ibu_hamil['skor_rochjati']; ?>" class="form-control " name="skor_rochjati" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama Suami</label>
                    <input type="text" value="<?= $ibu_hamil['nama_suami']; ?>" class="form-control " name="nama_suami" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">No. HP</label>
                    <input type="text" value="<?= $ibu_hamil['no_hp']; ?>" class="form-control " name="no_hp" required>
                </div>
            </div>

            <div class="form-group-inline my-4">
                <label for="" class="font-weight-bold">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" required><?= $ibu_hamil['alamat']; ?></textarea>
            </div>

                <button type="submit" class="btn btn-success">Simpan </button>
            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>