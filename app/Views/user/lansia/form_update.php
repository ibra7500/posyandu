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
                <li class="breadcrumb-item"><a href="<?= base_url('Lansia'); ?>">Data Warga Vaksin</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Lansia/edit_data/'.$lansia['nik_lansia']); ?>" method="POST">
            
                <div class="form-row">
                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">NIK</label>
                        <input type="text" value="<?=$lansia['nik_lansia']?>" class="form-control " name="nik_lansia" readonly required>
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">Nama</label>
                        <input type="text" value="<?=$lansia['nama']?>" class="form-control " name="nama_lansia" required>
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
                        <input name="tgl_lahir" type="date" value="<?=$lansia['tgl_lahir']?>" class="form-control" required>
                    </div>
                    
                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">No HP</label>
                        <input type="text" value="<?=$lansia['no_hp']?>" class="form-control " name="no_hp" required>
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">Status Kesehatan</label>
                        <input type="text" value="<?=$lansia['status_kesehatan']?>" class="form-control " name="status_kesehatan" required>
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">Tanggal Meninggal</label>
                        <input name="tgl_meninggal" type="date" value="<?=$lansia['tgl_meninggal']?>" class="form-control">
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">Keterangan</label>
                        <input name="keterangan" type="text" value="<?=$lansia['keterangan']?>" class="form-control">
                    </div>

                 </div>

                 <div class="form-group-inline my-4">
                        <label for="" class="font-weight-bold">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" required><?=$lansia['alamat']?></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan </button>

            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>