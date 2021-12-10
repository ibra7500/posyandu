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

            <div class="form-row">
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">NIK Ibu</label>
                    <input type="text" value="" class="form-control " name="nik_ibu_hamil" placeholder="Masukkan NIK Ibu">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama</label>
                    <input type="text" value="" class="form-control " name="nama_ibu_hamil" placeholder="Masukkan Nama Ibu">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Umur</label>
                    <input type="number" value="" class="form-control " name="umur" placeholder="Masukkan Umur Ibu">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Hamil Keberapa?</label>
                    <input type="text" value="" class="form-control " name="hamil_keberapa">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Anak Keberapa?</label>
                    <input type="text" value="" class="form-control " name="anak_keberapa">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Hari Pertama Haid Terakhir (HPHT)</label>
                    <input type="date" value="" class="form-control " name="hpht" id="tgl_hpht">
                </div>
               
                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Skor Rochjati </label>
                    <input type="text" value="" class="form-control " name="skor_rochjati">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">Nama Suami</label>
                    <input type="text" value="" class="form-control " name="nama_suami" placeholder="Masukkan Nama Suami">
                </div>

                <div class="form-group col-4 my-3">
                    <label for="" class="font-weight-bold">No. HP</label>
                    <input type="text" value="" class="form-control " name="no_hp" placeholder="Masukkan No HP">
                </div>

            </div>

            <div class="form-group-inline my-4">
                    <label for="" class="font-weight-bold">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"> </textarea>
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-success mx-auto mt-2" style="width: 50%;">Simpan </button>
            </div>
        
            </form>
        </div>
    </div>

</div> 

<?= $this->endSection(); ?>