<?= $this->extend('templates/index'); ?>     
         
<?= $this->section('page-content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= lang('Auth.register') ?></h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('Admin'); ?>" class="btn btn-success">Kembali</a></h6> -->
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Admin'); ?>">Admin</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
        <div class="card-body">
        <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= base_url('Admin/edit_data/'.$user['id']); ?>" method="POST" class="user">
            <?= csrf_field() ?>

                <div class="form-row">
                    <div class="form-group col-6 my-3 offset-md-3">
                        <label for="" class="font-weight-bold">Email</label>
                        <input type="hidden" value="<?=esc($user['id'])?>">
                        <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" 
                            placeholder="<?=lang('Auth.email')?>" value="<?=esc($user['email'])?>" required>
                    </div>
                    <div class="form-group col-6 my-3 offset-md-3">
                        <label for="" class="font-weight-bold">Username</label>
                        <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                        placeholder="<?=lang('Auth.username')?>" value="<?= esc($user['username']) ?>" required>
                    </div>
                    <div class="form-group col-6 my-3 offset-md-3">
                        <label for="" class="font-weight-bold">Full Name</label>
                        <input type="text" class="form-control" name="fullname" value="<?= esc($user['fullname']) ?>" required>
                    </div>

                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-success mx-auto mt-2 btn-lg" style="width: 50%;"><?=lang('Auth.register')?></button>
                </div>
            </form>
        
    </div>

</div> 

<?= $this->endSection(); ?>