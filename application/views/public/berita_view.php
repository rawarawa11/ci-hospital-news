<?php $this->load->view('layout/header'); ?>

<style>
    .berita-wrapper {
        background-color: #f4f9fc;
        padding: 60px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .berita-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .berita-header h2 {
        font-weight: 700;
        color: #004085;
    }

    .berita-header p {
        color: #6c757d;
        font-size: 16px;
    }

    .card-news {
        height: 100%;
        display: flex;
        flex-direction: column;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
        background-color: #ffffff;
    }

    .card-news:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    }

    .card-news img {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }

    .card-news .card-body {
        flex-grow: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-news .card-title {
        font-weight: 600;
        color: #004085;
    }

    .card-news .card-text {
        color: #5a5a5a;
        font-size: 15px;
        margin-bottom: 15px;
    }

    .btn-baca {
        background-color: #28a745;
        color: white;
        border: none;
        font-weight: 500;
        padding: 8px 16px;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    .btn-baca:hover {
        background-color: #218838;
        color: white;
    }
</style>

<main class="berita-wrapper">
    <div class="container">
        <div class="berita-header">
            <h2>Berita Terbaru</h2>
            <p>Informasi terkini mengenai kegiatan dan perkembangan di RS Bhayangkara Aceh.</p>
        </div>

        <div class="row">
            <?php foreach ($articles as $b): ?>
                <div class="col-md-4 mb-4">
                    <div class="card-news">
                        <img src="<?= $b->thumbnail ? base_url('upload/thumbnail/' . $b->thumbnail) : base_url('assets/img/default.png'); ?>"
                             alt="<?= $b->post_title; ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?= $b->post_title; ?></h5>
                            <p class="card-text"><?= character_limiter(strip_tags($b->post_content), 150); ?></p>
                            <a href="<?= site_url('home/detail/' . $b->id); ?>" class="btn btn-baca">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
