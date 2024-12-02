<?= $this->extend('layout/tampilan') ?>
<?= $this->section('content') ?>
<section class="contact-section">
  <div class="container">
    <div class="row">

      <!-- Contact Form -->
      <div class="col-lg-8">
        <div class="contact-form">
          <h3>Masukan Anda Sangat kami hargai</h3>
          <h3>Silahkan Memberikan Komentar Anda Tentang Produk Yang Kami Miliki</h3>
          <form action="<?= base_url('kontak/kirim') ?>" method="post">
            <?php if (session()->getFlashdata('success_message')): ?>
              <div class="alert alert-success mt-3"><?= session()->getFlashdata('success_message') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('kontak/kirim') ?>" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Anda" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subjek</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan Subjek Pesan" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>