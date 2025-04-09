<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?> - Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

<div class="container py-5">
    <h2 class="text-primary fw-bold mb-4">Berita Kategori: <?= $kategori; ?></h2>

    <div class="row g-4">
        <?php if (!empty($berita)) : ?>
            <?php foreach ($berita as $b) : ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="<?= base_url('upload/thumbnail/' . $b->thumbnail); ?>" class="card-img-top" style="height:200px; object-fit:cover;" alt="<?= $b->post_title; ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?= site_url('home/detail/' . $b->id); ?>" class="text-decoration-none text-dark fw-bold">
                                    <?= $b->post_title; ?>
                                </a>
                            </h5>
                            <p class="card-text text-muted"><?= substr(strip_tags($b->post_content), 0, 90); ?>...</p>
                            <a href="<?= site_url('home/detail/' . $b->id); ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12">
                <p class="text-muted">Belum ada berita untuk kategori ini.</p>
            </div>
        <?php endif; ?>
    </div>

    <div class="mt-5">
        <a href="<?= site_url('berita'); ?>" class="btn btn-secondary">Kembali ke Semua Berita</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
