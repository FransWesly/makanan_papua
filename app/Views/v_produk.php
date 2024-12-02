<?= $this->extend('layout/tampilan') ?>
<?= $this->section('content') ?>
<div class="row">
    <?php if (!empty($produks)): ?>
        <?php foreach ($produks as $produk): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url($produk['gambar']) ?>" class="card-img-top" alt="<?= $produk['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produk['nama'] ?></h5>
                        <p class="card-text"><?= $produk['deskripsi'] ?></p>
                        <p class="card-text">Harga: <?= number_format($produk['harga'], 2, ',', '.') ?></p>
                        <a href="<?= site_url('pesanan/create/' . $produk['produk_id']) ?>" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Tidak ada produk yang tersedia.</p>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>