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
</head>

<body>
    <div class="container mt-5">
        <?php if (empty($produk)): ?>
            <div class="alert alert-danger">Produk tidak ditemukan.</div>
        <?php else: ?>
            <h2 class="mb-4">Pemesanan</h2>

            <!-- Menampilkan Foto Produk -->
            <div class="text-center mb-4">
                <img src="<?= base_url('uploads/produk/' . $produk['gambar']) ?>" alt="<?= $produk['nama'] ?>" class="img-fluid" style="max-width: 300px;">
                <h4 class="mt-2"><?= $produk['nama'] ?></h4>
                <p>Harga: <?= number_format($produk['harga'], 2, ',', '.') ?></p>
                <p><?= $produk['deskripsi'] ?></p> <!-- Menampilkan deskripsi produk -->
            </div>

            <form action="<?= site_url('pesanan/store') ?>" method="post" class="border p-4 rounded bg-light shadow">
                <input type="hidden" name="produk_id" value="<?= $produk['produk_id'] ?>">
                <input type="hidden" name="harga" value="<?= $produk['harga'] ?>">

                <div class="form-group mb-3">
                    <label for="nama_pembeli">Nama Pembeli:</label>
                    <input type="text" name="nama_pembeli" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" class="form-control" min="1" value="1" required onchange="updateTotal(<?= $produk['harga'] ?>)">
                </div>

                <div class="form-group mb-3">
                    <label for="no_hp">Nomor HP:</label>
                    <input type="text" name="no_hp" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="total_harga">Total Harga:</label>
                    <input type="text" id="total_harga" class="form-control" value="<?= number_format($produk['harga'], 2, ',', '.') ?>" readonly>
                </div>

                <h4>Pilih Metode Pembayaran</h4>

                <div class="form-group mb-3">
                    <h5>COD</h5>
                    <input type="radio" name="metode_pembayaran" value="COD" required>
                    <label for="cod">Bayar di Tempat</label>
                </div>

                <div class="form-group mb-3">
                    <h5>Dana</h5>
                    <input type="radio" name="metode_pembayaran" value="DANA" required>
                    <label for="dana">Bayar menggunakan Dana</label>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                    <a href="<?= site_url('produk') ?>" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <script>
        function updateTotal(harga) {
            const jumlahInput = document.querySelector('input[name="jumlah"]').value;
            const totalHarga = harga * jumlahInput;
            document.getElementById('total_harga').value = totalHarga.toFixed(2).replace('.', ',');
        }
    </script>

    <!-- jQuery -->
    <script src="<?= base_url('template/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('template/dist/js/adminlte.js') ?>"></script>
</body>

</html>