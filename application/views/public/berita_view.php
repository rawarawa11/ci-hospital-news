<?php $this->load->view('layout/header'); ?>

<style>
    .card-news {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card-news img {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }

    .card-news .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-news .card-text {
        flex-grow: 1;
    }
</style>

<main class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Berita Terbaru</h2>
            <p class="text-muted">Informasi terkini mengenai kegiatan dan perkembangan di RS Bhayangkara Aceh.</p>
        </div>

        <div class="row">
            <?php foreach ($articles as $b): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm card-news">
                        <img src="<?= $b->thumbnail ? base_url('uploads/' . $b->thumbnail) : base_url('assets/img/default.png'); ?>"
                             class="card-img-top"
                             alt="<?= $b->post_title; ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?= $b->post_title; ?></h5>
                            <p class="card-text"><?= character_limiter(strip_tags($b->post_content), 150); ?></p>
                            <a href="<?= site_url('home/detail/' . $b->id); ?>" class="btn btn-primary mt-3">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
