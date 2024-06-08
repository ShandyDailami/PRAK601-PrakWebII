<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center" style="font-weight: bold;">REGISTER</h4>
                    <hr>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <?= validation_list_errors() ?>

                    <?= form_open('register'); ?>
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Regis</button>
                        <a class="btn btn-secondary" href="<?php echo base_url('/'); ?>">Back</a>
                    </div>
                    <?= form_close(); ?>
                    

                </div>

            </div>
            <div class="text-center mt-2">
                Sudah punya akun? <a href="<?php echo base_url('login'); ?>">Silakan login.</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>