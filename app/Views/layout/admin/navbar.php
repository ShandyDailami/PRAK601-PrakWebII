<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php if (session()->get('logged_in') === TRUE): ?>
            <a class="nav-link" href="<?= base_url('admin/view') ?>">Admin</a>
          <?php else: ?>
            <a class="nav-link" href="<?= base_url('login') ?>"
              onclick="alert('You must be logged in to access the Admin section.'); window.location.href = '<?= base_url('login') ?>'; return false;">Admin</a>

          <?php endif; ?>
        </li>
        <?php if (session()->get('logged_in') === TRUE): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/'); ?>/logout">Logout</a>
          </li>
        <?php endif; ?>
        <?php if (session()->get('logged_in') != TRUE): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/login">Login</a>
          </li>
        <?php endif; ?>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="<?= base_url('admin/create') ?>" class="btn btn-secondary mr-3">New Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>