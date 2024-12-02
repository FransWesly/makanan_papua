<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Makanan Papua</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('template/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('template/dist/css/adminlte.min.css') ?>">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('template/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/produk/produk') ?>" class="nav-link">
                <i class="nav-icon fas fa-utensils"></i>
                <p>Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/pesanan/pesanan') ?>" class="nav-link active">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>Pesanan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/pengguna/pengguna') ?>" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Pengguna</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kontak/kontak') ?>" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>Kontak</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Pesanan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Pesanan</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar Pesanan</h3>
                  <div class="card-tools">
                    <a href="<?= base_url('admin/pesanan/create') ?>" class="btn btn-primary">Tambah Pesanan</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Tanggal Pesanan</th>
                        <th>Total</th>
                        <th>Metode Pembayaran</th>
                        <th>Status</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($pesanan as $order): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $order['nama_pembeli'] ?: 'Tidak Diketahui' ?></td>
                          <td><?= date('Y-m-d H:i:s', strtotime($order['tanggal_pesanan'])) ?></td>
                          <td><?= number_format($order['total'], 2, ',', '.') ?></td>
                          <td><?= $order['metode_pembayaran'] ?></td>
                          <td><?= ucfirst($order['status']) ?></td>
                          <td><?= $order['no_hp'] ?></td>
                          <td>
                            <a href="<?= base_url('admin/pesanan/edit/' . $order['pesanan_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('admin/pesanan/delete/' . $order['pesanan_id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus Pesan ini?')">Hapus</a>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <strong>&copy; Makanan Khas Papua.</strong>
      <div class="float-right d-none d-sm-inline-block">
        <b>Tugas</b> Web
      </div>
    </footer>
  </div>

  <script src="<?= base_url('template/plugins/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('template/dist/js/adminlte.js') ?>"></script>
</body>

</html>