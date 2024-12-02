<?= $this->extend('layout/tampilan') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Makanan Khas Papua</h2>

    <!-- Deskripsi Umum -->
    <div class="mb-4">
        <p class="text-center">Kuliner Papua kaya akan rasa dan tradisi. Menggunakan bahan-bahan lokal dan resep tradisional yang diwariskan turun-temurun, makanan Papua menawarkan pengalaman kuliner yang unik dan menggugah selera.</p>
    </div>

    <!-- Galeri Gambar -->
    <div id="foodGallery" class="carousel slide mb-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/image/papeda.jpg') ?>" class="d-block w-100" alt="Papeda">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/image/kuah_kuning.jpg') ?>" class="d-block w-100" alt="Ikan Kuah Kuning">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/image/sate_ulat.jpg') ?>" class="d-block w-100" alt="Sate Ulat Sagu">
            </div>
        </div>
        <a class="carousel-control-prev" href="#foodGallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#foodGallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Daftar Makanan Khas dari Database -->
    <div class="row">
        <?php if (!empty($produk)): ?>
            <?php foreach ($produk as $item): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow border-light">
                        <img src="<?= base_url($item['gambar']) ?>" class="card-img-top" alt="<?= $item['nama'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['nama'] ?></h5>
                            <p class="card-text"><?= $item['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Tidak ada produk yang tersedia.</p>
        <?php endif; ?>
    </div>

    <!-- Keterangan Pemesanan -->
    <div class="text-center mt-4">
        <p>Untuk pemesanan, silahkan klik menu <a href="<?= site_url('produk') ?>">Produk Kami</a>.</p>
    </div>
</div>

<?= $this->endSection() ?>