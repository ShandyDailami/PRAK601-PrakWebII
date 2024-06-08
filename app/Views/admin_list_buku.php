<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun terbit</th>
</tr>
</thead>
<tbody>
<?php foreach($buku as $book): ?>
<tr>
    <td><?= $book['id'] ?></td>
    <td>
        <strong><?= $book['judul'] ?></strong><br>
    </td>
    <td><?= $book['penulis'] ?></td>
    <td><?= $book['penerbit'] ?></td>
    <td><?= $book['tahun_terbit'] ?></td>
    <td>
        <a href="<?= base_url('admin/view/'.$book['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="#" data-href="<?= base_url('admin/view/'.$book['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>


<?= $this->endSection() ?>