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

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

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
                            <a href="<?= base_url('admin/produk/produk') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-utensils"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/pesanan/pesanan') ?>" class="nav-link">
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

        <div class="container">
            <h1 class="text-center mb-4">Edit Produk</h1>
            <form action="<?= site_url('admin/produk/produk/update/' . $produk['produk_id']) ?>" method="post" enctype="multipart/form-data" class="card p-4">
                <div class="form-group">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama" value="<?= $produk['nama'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                    <textarea class="form-control" name="deskripsi" rows="4" required><?= $produk['deskripsi'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="number" class="form-control" name="harga" value="<?= $produk['harga'] ?>" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="stok" class="form-label">Stok:</label>
                    <input type="number" class="form-control" name="stok" value="<?= $produk['stok'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="gambar" class="form-label">Gambar (Kosongkan jika tidak diubah):</label>
                    <input type="file" class="form-control-file" name="gambar">
                    <?php if (!empty($produk['gambar'])): ?>
                        <small>Gambar saat ini: <a href="<?= base_url($produk['gambar']) ?>" target="_blank">Lihat Gambar</a></small>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url('template/plugins/jquery/jquery.min.js') ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('template/dist/js/adminlte.js') ?>"></script>
</body>

</html>