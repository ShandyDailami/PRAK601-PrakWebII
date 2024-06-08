<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Masukkan Penulis" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Penerbit" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="text" name="tahun_terbit" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Masukkan Tahun Terbit" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>


<?= $this->endSection() ?>