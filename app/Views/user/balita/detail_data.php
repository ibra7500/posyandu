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
            <h2 class="h3 mb-2 text-gray-800">Data Untuk <?= $balita['nama']; ?></h2>
        </div>
        <div class="card-body">
            <div class="container">
                <table class="table" id="dataTable">
                <?php
                $tgl_lahir = esc($balita['tgl_lahir']);
                $tgl_lahir2 = date('d-m-Y', strtotime($tgl_lahir));

                $berat_lahir = esc($balita['berat_lahir']);
                $format_berat_lahir = number_format($berat_lahir, 2, ',', '.');

                $panjang_lahir = esc($balita['panjang_lahir']);
                $format_panjang_lahir = number_format($panjang_lahir, 2, ',', '.');
                ?>
                    <tr>
                        <td>NIK Balita</td>
                        <td>:</td>
                        <td><?=esc($balita['nik_balita']);?></td>
                    </tr>
                    <tr>
                        <td>Nama Balita</td>
                        <td>:</td>
                        <td><?=esc($balita['nama']);?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=esc($balita['jenis_kelamin']);?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?=$tgl_lahir2?></td>
                    </tr>
                    <tr>
                        <td>Berat Lahir</td>
                        <td>:</td>
                        <td><?=$format_berat_lahir;?></td>
                    </tr>
                    <tr>
                        <td>Panjang Lahir</td>
                        <td>:</td>
                        <td><?=$format_panjang_lahir;?></td>
                    </tr>
                    <tr>
                        <td>Status Kesehatan</td>
                        <td>:</td>
                        <td><?=esc($balita['status_kesehatan']);?></td>
                    </tr>
                    <tr>
                        <td>NIK Ayah</td>
                        <td>:</td>
                        <td><?=esc($balita['nik_ayah']);?></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td><?=esc($balita['nama_ayah']);?></td>
                    </tr>
                    <tr>
                        <td>NIK Ibu</td>
                        <td>:</td>
                        <td><?=esc($balita['nik_ibu']);?></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td><?=esc($balita['nama_ibu']);?></td>
                    </tr>
                    <tr>
                        <td>No. HP Ayah</td>
                        <td>:</td>
                        <td><?=esc($balita['no_hp_ayah']);?></td>
                    </tr>
                    <tr>
                        <td>No. HP Ibu</td>
                        <td>:</td>
                        <td><?=esc($balita['no_hp_ibu']);?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=esc($balita['alamat']);?></td>
                    </tr>
                    
                </table>

        </div>
    </div>

</div> 

<?= $this->endSection(); ?>