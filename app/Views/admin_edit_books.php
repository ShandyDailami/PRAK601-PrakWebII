<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $buku['id'] ?>" />
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control" 
            placeholder="Masukkan Judul" value="<?= $buku['judul'] ?>" required>
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" 
            placeholder="Masukkan Penulis" value="<?= $buku['penulis'] ?>" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" 
            placeholder="Masukkan Penerbit" value="<?= $buku['penerbit'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun terbit</label>
        <input type="text" name="tahun_terbit" class="form-control" 
            placeholder="Masukkan Tahun terbit" value="<?= $buku['tahun_terbit'] ?>" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>


<?= $this->endSection() ?>