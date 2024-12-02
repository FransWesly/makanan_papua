<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Makanan Khas Papua</title>
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('assets/image/logo.jpg') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

    <!-- Sticky Navbar -->
    <?= $this->include('layout/navbar') ?>

    <!-- Header Carousel -->
    <!-- Header with Background Image and Blur Effect -->
    <header class="header" style="background-image: url('<?= base_url('assets/image/kuliner_papua.jpg') ?>');">
        <div class="header-overlay"></div>
        <div class="header-content text-center">
            <h1>Selamat Datang di Penjualan Makanan Khas Papua</h1>
            <p class="lead">Temukan makanan tradisional khas Papua dengan cita rasa autentik</p>
        </div>
    </header>


    <div class="container content mt-5">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <?= $this->include('layout/footer') ?>

    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>