<?php $this->load->view('layout/header'); ?>
<!-- Hero Image (Trending News) -->
<section class="text-white py-5" style="background: linear-gradient(to right, #6a11cb, #2575fc);">
    <?php if (isset($hero_news) && !empty($hero_news)) : ?>
        <div class="hero-image position-relative text-white text-center d-flex align-items-center" style="
            background: url('<?= base_url('upload/thumbnail/' . $hero_news->thumbnail); ?>') no-repeat center center;
            background-size: cover;
            min-height: 400px;
        ">
            <div class="container position-relative z-2">
                <span class="badge bg-warning text-dark">TRENDING</span>
                <h1 class="mt-3 fw-bold display-4"><?= $hero_news->post_title; ?></h1>
                <p class="lead text-shadow"><?= isset($hero_news->post_content) ? substr(strip_tags($hero_news->post_content), 0, 100) . '...' : 'Konten tidak tersedia'; ?></p>
                <a href="<?= site_url('home/detail/' . $hero_news->id); ?>" class="btn btn-warning text-dark btn-lg">Baca Selengkapnya</a>
            </div>
            <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5); z-index:1;"></div>
        </div>
    <?php else : ?>
        <div class="container text-center py-5">
            <h1>Belum ada berita terbaru</h1>
            <p>Silakan cek kembali nanti.</p>
        </div>
    <?php endif; ?>
</section>

<!-- Sekilas Tentang Instansi -->
<section class="py-5" style="background: linear-gradient(to right, #eaf6ff, #ffffff);">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="bg-white shadow-lg rounded-4 p-5 position-relative overflow-hidden">
                    <!-- Icon Dekoratif -->
                    <div class="position-absolute top-0 end-0 me-4 mt-3 opacity-10" style="font-size: 4rem; color: #e0e0e0;">
                        <i class="fas fa-shield-alt"></i>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="<?= base_url('assets/img/instansi 2.jpg'); ?>" class="img-fluid rounded-3 shadow-sm" alt="Tentang Instansi">
                        </div>
                        <div class="col-md-6">
                            <h2 class="text-primary fw-bold mb-3">Sekilas Tentang Kami</h2>
                            <p class="text-muted">
                                <strong>BhayangkaraAceh</strong> merupakan institusi kepolisian yang berkomitmen untuk memberikan layanan terbaik kepada masyarakat. Melalui platform ini, kami menyajikan informasi terpercaya, pelayanan publik, serta berita kegiatan kami di wilayah Aceh.
                            </p>
                            <a href="<?= site_url('home/profil'); ?>" class="btn btn-outline-primary mt-3 px-4">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pelayanan yang Tersedia -->
<section class="py-5 bg-light border-top">
    <div class="container">
        <h2 class="text-center text-primary fw-bold mb-5">Pelayanan yang Tersedia</h2>
        <div class="row g-4">
            <!-- Card Jadwal Dokter -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 rounded-4" style="background-color: #2196f3; color: white;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="fas fa-user-md me-2"></i>Jadwal Dokter</h5>
                        <p class="card-text">Informasi lengkap mengenai jadwal praktik dokter umum dan spesialis yang bertugas setiap hari.</p>
                        <a href="<?= site_url('home/jadwal'); ?>" class="btn btn-outline-light">Lihat Jadwal</a>
                    </div>
                </div>
            </div>

            <!-- Card Pelayanan IGD -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 rounded-4" style="background-color:rgb(252, 199, 64); color: black;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="fas fa-ambulance me-2"></i>Pelayanan IGD</h5>
                        <p class="card-text">Pelayanan Instalasi Gawat Darurat yang siaga 24 jam untuk penanganan medis darurat.</p>
                        <a href="<?= site_url('home/igd'); ?>" class="btn btn-outline-dark">Info IGD</a>
                    </div>
                </div>
            </div>

            <!-- Card Informasi Apotek -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 rounded-4" style="background-color: #4caf50; color: white;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="fas fa-pills me-2"></i>Apotek</h5>
                        <p class="card-text">Dapatkan informasi mengenai stok obat, jam operasional apotek, dan layanan farmasi lainnya di rumah sakit kami.</p>
                        <a href="<?= site_url('home/apotek'); ?>" class="btn btn-outline-light">Lihat Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Articles -->
<section class="py-5 bg-light border-top">
    <div class="container">
        <h2 class="mb-5 text-primary fw-bold text-center">Berita Terbaru</h2>
        <div class="row g-4">
            <?php
            $displayLimit = 6;
            $count = 0;
            if (!empty($articles)) :
                foreach ($articles as $article) :
                    if ($count >= $displayLimit) break;
                    $count++;
            ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow rounded-4 border-0 overflow-hidden">
                        <div class="overflow-hidden" style="height: 200px;">
                            <img src="<?= base_url('upload/thumbnail/' . $article->thumbnail); ?>" class="card-img-top h-100 w-100" style="object-fit: cover; transition: transform 0.3s;" alt="<?= $article->post_title; ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                <a href="<?= site_url('home/detail/' . $article->id); ?>" class="text-decoration-none text-dark">
                                    <?= $article->post_title; ?>
                                </a>
                            </h5>
                            <p class="card-text text-muted"><?= substr(strip_tags($article->post_content), 0, 90); ?>...</p>
                            <a href="<?= site_url('home/detail/' . $article->id); ?>" class="btn-baca text-center text-decoration-none">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-muted text-center">Tidak ada artikel yang tersedia.</p>
        <?php endif; ?>
        </div>

        <?php if (!empty($articles) && count($articles) > $displayLimit) : ?>
            <div class="text-center mt-5">
                <a href="<?= site_url('home/berita'); ?>" class="btn btn-success px-4 py-2">Lihat Semua Berita</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php $this->load->view('layout/footer'); ?>
