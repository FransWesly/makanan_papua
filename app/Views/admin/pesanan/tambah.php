<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Makanan Papua | Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('template/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/dist/css/adminlte.min.css') ?>">
    <style>
        .form-label {
            font-weight: bold;
            margin-top: 10px;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            max-width: 400px;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
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
                                <div class="card-body">
                                    <form action="<?= base_url('admin/pesanan/store') ?>" method="post">
                                        <div class="form-group">
                                            <label class="form-label" for="pengguna_id">Pengguna ID:</label>
                                            <input type="text" name="pengguna_id" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="total">Total:</label>
                                            <input type="number" name="total" class="form-control" step="0.01" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="metode_pembayaran">Metode Pembayaran:</label>
                                            <select name="metode_pembayaran" class="form-control" required>
                                                <option value="COD">COD</option>
                                                <option value="DANA">DANA</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="status">Status:</label>
                                            <select name="status" class="form-control" required>
                                                <option value="pending">Pending</option>
                                                <option value="completed">Completed</option>
                                                <option value="canceled">Canceled</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="no_hp">No HP:</label>
                                            <input type="text" name="no_hp" class="form-control" required>
                                        </div>

                                        <input type="submit" value="Simpan" class="btn-submit">
                                    </form>
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