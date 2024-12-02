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
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f6f9;
        }

        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .text-center {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
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
                        <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
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
    <!-- /.sidebar -->

    <div class="form-container">
        <h2 class="text-center">Update Pesanan</h2>
        <form action="<?= base_url('admin/pesanan/update/' . $pesanan['pesanan_id']) ?>" method="post">
            <div class="form-group">
                <label class="form-label" for="pengguna_id">Pengguna ID:</label>
                <input type="text" name="pengguna_id" class="form-control" value="<?= $pesanan['pengguna_id'] ?>" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="total">Total:</label>
                <input type="number" name="total" class="form-control" step="0.01" value="<?= $pesanan['total'] ?>" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="metode_pembayaran">Metode Pembayaran:</label>
                <select name="metode_pembayaran" class="form-control" required>
                    <option value="COD" <?= $pesanan['metode_pembayaran'] == 'COD' ? 'selected' : '' ?>>COD</option>
                    <option value="DANA" <?= $pesanan['metode_pembayaran'] == 'DANA' ? 'selected' : '' ?>>DANA</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="status">Status:</label>
                <select name="status" class="form-control" required>
                    <option value="pending" <?= $pesanan['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                    <option value="completed" <?= $pesanan['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
                    <option value="canceled" <?= $pesanan['status'] == 'canceled' ? 'selected' : '' ?>>Canceled</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="no_hp">No HP:</label>
                <input type="text" name="no_hp" class="form-control" value="<?= $pesanan['no_hp'] ?>" required>
            </div>

            <input type="submit" value="Update" class="btn-submit">
        </form>

        <script src="<?= base_url('template/plugins/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('template/dist/js/adminlte.js') ?>"></script>
</body>

</html>