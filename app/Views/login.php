<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Makanan Papua | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('template/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/dist/css/adminlte.min.css?v=3.2.0') ?>">
    <style>
        body {
            font-size: 1.2rem;
            /* Meningkatkan ukuran font */
        }

        .login-box {
            width: 400px;
            /* Lebar kotak login */
            margin: auto;
            /* Pusatkan kotak login */
        }

        .login-logo a {
            font-size: 2rem;
            /* Ukuran font untuk logo */
        }

        .input-group .form-control {
            height: 50px;
            /* Tinggi input lebih besar */
            font-size: 1.2rem;
            /* Ukuran font input */
        }

        .btn {
            font-size: 1.2rem;
            /* Ukuran font untuk tombol */
            padding: 10px;
            /* Padding lebih banyak untuk tombol */
        }

        .alert {
            font-size: 1rem;
            /* Ukuran font untuk pesan kesalahan */
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Makanan</b>Papua</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login Akun Anda</p>

                <form action="<?= base_url('auth/loginSubmit') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('template/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>
</body>

</html>