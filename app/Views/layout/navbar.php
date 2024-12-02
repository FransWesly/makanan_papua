<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/') ?>">Makanan Papua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= (isset($menu) && $menu == 'Home') ? 'active' : '' ?>" href="<?= base_url('home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($menu == 'Produk') ? 'active' : '' ?>" href="<?= base_url('produk') ?>">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($menu == 'Tentang') ? 'active' : '' ?>" href="<?= base_url('tentang') ?>">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($menu == 'Kontak') ? 'active' : '' ?>" href="<?= base_url('kontak') ?>">Komentar Anda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($menu == 'Auth') ? 'active' : '' ?>" href="<?= base_url('login') ?>">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>