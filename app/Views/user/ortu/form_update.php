<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('Orang_Tua'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Orang_Tua'); ?>">Data Orang Tua</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Orang_Tua/edit_data/'.$ortu['id_ortu']); ?>" method="POST">
            
                <div class="form-row">
                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">NIK Ayah</label>
                        <input type="hidden" value="<?=$ortu['id_ortu']?>" class="form-control " name="id_ortu" readonly required>
                        <input type="text" value="<?=$ortu['nik_ayah']?>" class="form-control " name="nik_ayah" readonly required>
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">Nama Ayah</label>
                        <input type="text" value="<?=$ortu['nama_ayah']?>" class="form-control " name="nama_ayah" required>
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">NIK Ibu</label>
                        <input type="text" value="<?=$ortu['nik_ibu']?>" class="form-control " name="nik_ibu" readonly required>
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">Nama Ibu</label>
                        <input type="text" value="<?=$ortu['nama_ibu']?>" class="form-control " name="nama_ibu" required>
                    </div>
                    
                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">No HP Ayah</label>
                        <input type="text" value="<?=$ortu['no_hp_ayah']?>" class="form-control " name="no_hp_ayah" required>
                    </div>

                    <div class="form-group col-4 my-3">
                        <label for="" class="font-weight-bold">No HP Ibu</label>
                        <input type="text" value="<?=$ortu['no_hp_ibu']?>" class="form-control " name="no_hp_ibu" required>
                    </div>

                 </div>

                 <div class="form-group-inline my-4">
                        <label for="" class="font-weight-bold">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" required><?=$ortu['alamat']?></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block">Simpan</button>

            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>