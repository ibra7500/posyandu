<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('Orang Tua'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Orang_Tua'); ?>">Data Orang Tua</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Orang_Tua/input_data'); ?>" method="POST">

            <div class="form-row">
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Ayah</label>
                    <input type="text" value="" class="form-control " name="nik_ayah" placeholder="Masukkan NIK Ayah" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama Ayah</label>
                    <input type="text" value="" class="form-control " name="nama_ayah" placeholder="Masukkan Nama Ayah" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Ibu</label>
                    <input type="text" value="" class="form-control " name="nik_ibu" placeholder="Masukkan NIK Ibu" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama Ibu</label>
                    <input type="text" value="" class="form-control " name="nama_ibu" placeholder="Masukkan Nama Ibu" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">No HP Ayah</label>
                    <input type="text" value="" class="form-control " name="no_hp_ayah" placeholder="Masukkan No HP Ayah" required>
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">No HP Ibu</label>
                    <input type="text" value="" class="form-control " name="no_hp_ibu" placeholder="Masukkan No HP Ibu" required>
                </div>

            </div>

            <div class="form-group-inline my-4">
                    <label for="" class="font-weight-bold">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block">Simpan </button>

            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>