<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
<div class="row">
    <div class="col-md-6">
            <h3 class="h3">Hello <?php if (session()->get('logged_in') === TRUE) { 
                echo session()->get('username'); 
            } else { 
                echo "Guest"; 
            } ?>!</h3>
            <p>Selamat datang</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>