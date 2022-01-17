<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content') ?>
<div class="container-fluid">

<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="text-left">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= $title?></li>
                </ol>
                <a href="<?= base_url('Admin/register'); ?>" class="btn btn-success">Input Data</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Fullname</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($user as $data_user) : ?>
                        <tr>
                            <td width= "1%"><?= $no++; ?></td>                           
                            <td><?=esc($data_user['username']);?></td>
                            <td><?=esc($data_user['email']);?></td>
                            <td><?=esc($data_user['fullname']);?></td>
                            <td>
                                <a href="<?= base_url('Admin/update_data/'.$data_user['id']); ?>" class="btn btn-success mx-3" style="width:40%;">Update</a>
                                <a href="#" type="button" data-target="#myModalHapus-<?=$data_user['id'];?>" class="btn btn-danger mx-3" data-toggle="modal" style="width:40%;">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="myModalHapus-<?=$data_user['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus <?=$title?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Apakah anda yakin ingin <b>menghapus</b> user dengan username <b><?=esc($data_user['username']);?></b>?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <a href="<?= base_url('Admin/delete_data/'.$data_user['id']); ?>" class="btn btn-danger">Hapus</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>