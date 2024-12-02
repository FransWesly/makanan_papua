<?= $this->extend('layout/tampilan') ?>
<?= $this->section('content') ?>
<div class="container about-content">
    <div class="container contact-content">
        <h2>Kontak Kami</h2>
        <p>
            Kami sangat senang mendengar dari Anda! Apakah Anda memiliki pertanyaan, saran, atau ingin melakukan pemesanan? Jangan ragu untuk menghubungi kami. Kami berkomitmen untuk memberikan pelayanan terbaik dan menjawab setiap pertanyaan Anda.
        </p>

        <h3>Jika Anda Ingin Menghubungi Kami</h3>
        <h3>Silahkan Kontak Di</h3>
        <div class="col-lg-4">
            <div class="contact-info">
                <p><strong>Telepon:</strong>0852 2623 3612</p>
                <p><strong>Email:</strong> info@makananpapua.com</p>
                <p><strong>Jam Operasional:</strong> Senin - Jumat, 09:00 - 18:00</p>
            </div>
        </div>
        <h3>Lokasi Kami</h3>
        <p>
            Temukan kami di lokasi yang strategis. Kami siap menyambut Anda dengan hangat. Lihat peta di bawah ini untuk mengetahui lokasi kami:
        </p>

        <p>
            Kami mengundang Anda untuk mengunjungi kami dan menjelajahi kelezatan makanan khas Papua. Setiap kunjungan adalah kesempatan untuk merasakan budaya dan tradisi kami. Jangan ragu untuk menghubungi kami jika Anda memerlukan informasi lebih lanjut.
        </p>
        <!-- Peta Google Maps -->
        <div style="width: 100%; height: 400px;">
            <iframe
                < src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127546.27232755857!2d140.59862395966442!3d-2.5649638981889216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686c5f521fe15d1f%3A0xe01ceb7efca2b87f!2sBukit%20Jokowi!5e0!3m2!1sid!2sid!4v1733158710762!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"></iframe>
        </div>

    </div>
    <?= $this->endSection() ?>