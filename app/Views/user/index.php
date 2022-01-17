<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content') ?>
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>

      <!-- Content Row -->
    <div class="row">
        <!-- Jumlah data Balita -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Balita</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_balita;?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-baby fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah data Ibu Hamil -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Jumlah Data Ibu yang Sedang Hamil</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_ibu_hamil;?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-female fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Jumlah Data Lansia -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Data Lansia</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_lansia;?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-female fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Jumlah Data Warga yang Sudah Vaksin Covid-19 -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Jumlah Data Warga yang Sudah Vaksin Covid-19</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_warga_vaksin;?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-female fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-danger"><?=$title_balita?></h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="balita" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Status Kesehatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($balita_kurang as $bk) :
                                    $tgl_lahir_date = new DateTime (esc($bk['tgl_lahir']));
                                    $today = new DateTime();
            
                                    //tahun
                                    $y = $today->diff($tgl_lahir_date)->y;
                                    //bulan
                                    $m = $today->diff($tgl_lahir_date)->m;
                                    //hari
                                    $d = $today->diff($tgl_lahir_date)->d;
                                    
                                    if ($y!=0) {
                                        $tahun = $y.' Tahun';
                                    }
                                    else {
                                        $tahun = '';
                                    }
                            ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=esc($bk['nama'])?></td>
                                <td><?=esc($bk['jenis_kelamin'])?></td>
                                <td><?=$tahun. " ". $m. " bulan ". $d. " hari ";?></td>
                                <td><?=esc($bk['status_kesehatan'])?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success"><?=$title_balita_lebih?></h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="balita_lebih" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Status Kesehatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($balita_lebih as $bl) :
                                    $tgl_lahir_date = new DateTime (esc($bl['tgl_lahir']));
                                    $today = new DateTime();
            
                                    //tahun
                                    $y = $today->diff($tgl_lahir_date)->y;
                                    //bulan
                                    $m = $today->diff($tgl_lahir_date)->m;
                                    //hari
                                    $d = $today->diff($tgl_lahir_date)->d;
                                    
                                    if ($y!=0) {
                                        $tahun = $y.' Tahun';
                                    }
                                    else {
                                        $tahun = '';
                                    }
                            ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=esc($bl['nama'])?></td>
                                <td><?=esc($bl['jenis_kelamin'])?></td>
                                <td><?=$tahun. " ". $m. " bulan ". $d. " hari ";?></td>
                                <td><?=esc($bl['status_kesehatan'])?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info"><?=$title_ibu_hamil?></h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="ibuhamil" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>HPHT</th>
                                <th>HPL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1; 
                            foreach ($ibu_lahir as $il) : 
                            ?>
                            <tr>
                                <td><?=$nomor++?></td>
                                <td><?=esc($il['nama_ibu_hamil'])?></td>
                                <td><?=esc($il['hpht'])?></td>
                                <td><?=esc($il['hpl'])?></td>
                            </tr>
                            <?php 
                        endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?=$title_belum_vaksin?></h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="vaksin" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>NO HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor1 = 1; 
                            foreach ($belum_vaksin as $vaksin) : 
                            ?>
                            <tr>
                                <td><?=$nomor1++?></td>
                                <td><?=esc($vaksin['nama'])?></td>
                                <td><?=esc($vaksin['alamat'])?></td>
                                <td><?=esc($vaksin['no_hp'])?></td>
                            </tr>
                            <?php 
                        endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>