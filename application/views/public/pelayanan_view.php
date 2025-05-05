<?php $this->load->view('layout/header'); ?>

<style>
    .layanan-wrapper {
        background: #f0f4f8;
        padding: 60px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .layanan-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .layanan-header h2 {
        font-weight: 700;
        color: #004085;
    }

    .layanan-header p {
        color: #6c757d;
    }

    .layanan-card {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease-in-out;
        text-align: center;
        height: 100%;
    }

    .layanan-card:hover {
        transform: translateY(-5px);
    }

    .layanan-card i {
        font-size: 32px;
        margin-bottom: 15px;
    }

    .layanan-card h5 {
        font-weight: 600;
        color: #343a40;
    }

    .layanan-card p {
        color: #6c757d;
    }

    @media (max-width: 767px) {
        .layanan-card {
            margin-bottom: 30px;
        }
    }
</style>

<main class="layanan-wrapper">
    <div class="container">
        <div class="layanan-header">
            <h2>Layanan yang Tersedia</h2>
            <p>Kami menyediakan berbagai layanan kesehatan unggulan untuk Anda dan keluarga.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <a href="<?= base_url('home/jadwal'); ?>" class="text-decoration-none text-dark">
                    <div class="layanan-card">
                        <i class="fas fa-user-md text-success"></i>
                        <h5>Jadwal Dokter</h5>
                        <p>Lihat jadwal dokter umum dan spesialis kami.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="<?= base_url('home/igd'); ?>" class="text-decoration-none text-dark">
                    <div class="layanan-card">
                        <i class="fas fa-ambulance text-danger"></i>
                        <h5>Pelayanan IGD</h5>
                        <p>Informasi tentang layanan gawat darurat 24 jam.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="<?= base_url('home/apotek'); ?>" class="text-decoration-none text-dark">
                    <div class="layanan-card">
                        <i class="fas fa-pills text-info"></i>
                        <h5>Apotek</h5>
                        <p>Cek ketersediaan obat dan jam buka apotek.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
