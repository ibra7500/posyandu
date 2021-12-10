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
                <li class="breadcrumb-item active"><?= lang('Auth.register') ?></li>
            </ol>
        </div>
        <div class="card-body">
        <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= route_to('register') ?>" method="POST" class="user">
            <?= csrf_field() ?>

                <div class="form-row">
                    <div class="form-group col-6 my-3 offset-md-3">
                        <label for="" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" 
                            placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                    </div>
                    <div class="form-group col-6 my-3 offset-md-3">
                        <label for="" class="font-weight-bold">Username</label>
                        <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                        placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                    </div>

                    <div class="form-group col-6 my-3 offset-md-3">
                        <label for="" class="font-weight-bold">Password</label>
                        <input type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                            name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                    </div>
                    <div class="form-group col-6 my-3 offset-md-3">
                        <label for="" class="font-weight-bold">Repeat Password</label>
                        <input type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                        name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-success mx-auto mt-2 btn-lg" style="width: 50%;"><?=lang('Auth.register')?></button>
                </div>
            </form>
        
    </div>

</div> 

<?= $this->endSection(); ?>