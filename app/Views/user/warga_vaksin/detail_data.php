<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('vaksin'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Warga_Vaksin'); ?>">Data vaksin</a></li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
            <h2 class="h3 mb-2 text-gray-800">Data Untuk <?= $vaksin['nama']; ?></h2>
        </div>
        <div class="card-body">
            <div class="container">
                <table class="table" id="dataTable">
                <?php
                $tgl_vaksin_1a = esc($vaksin['tgl_vaksin_pertama']);
                $tgl_vaksin_1b = date('d-m-Y', strtotime($tgl_vaksin_1a));

                $tgl_vaksin_2a = esc($vaksin['tgl_vaksin_kedua']);
                            
                if ($tgl_vaksin_2a == '0000-00-00') {
                    $tgl_vaksin_2b = "-";
                }
                else {
                    $tgl_vaksin_2b = date('d-m-Y', strtotime($tgl_vaksin_2a));
                }

                ?>
                    <tr>
                        <td>NIK Warga</td>
                        <td>:</td>
                        <td><?=esc($vaksin['nik']);?></td>
                    </tr>
                    <tr>
                        <td>Nama Warga</td>
                        <td>:</td>
                        <td><?=esc($vaksin['nama']);?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=esc($vaksin['jenis_kelamin']);?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=esc($vaksin['alamat']);?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Vaksin Pertama</td>
                        <td>:</td>
                        <td><?=$tgl_vaksin_1b?></td>
                    </tr>
                    <tr>
                        <td>Tempat Vaksin Pertama</td>
                        <td>:</td>
                        <td><?=esc($vaksin['tempat_vaksin_pertama']);?></td>
                    </tr>
                    <tr>
                        <td>Jenis Vaksin Pertama</td>
                        <td>:</td>
                        <td><?=esc($vaksin['jenis_vaksin_pertama']);?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Vaksin Kedua</td>
                        <td>:</td>
                        <td><?=$tgl_vaksin_2b?></td>
                    </tr>
                    <tr>
                        <td>Tempat Vaksin Kedua</td>
                        <td>:</td>
                        <td><?=esc($vaksin['tempat_vaksin_kedua']);?></td>
                    </tr>
                    <tr>
                        <td>Jenis Vaksin Kedua</td>
                        <td>:</td>
                        <td><?=esc($vaksin['jenis_vaksin_kedua']);?></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?=esc($vaksin['keterangan']);?></td>
                    </tr>
                </table>

        </div>
    </div>

</div> 

<?= $this->endSection(); ?>