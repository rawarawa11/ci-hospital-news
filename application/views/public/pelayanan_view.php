<?php $this->load->view('layout/header'); ?>

<style>
    .layanan-wrapper {
        background: #f8fcff;
        padding: 60px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .layanan-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .layanan-header h2 {
        font-weight: 700;
        color: #003e8a; /* biru khas */
    }

    .layanan-header p {
        color: #6c757d;
        font-size: 17px;
    }

    .layanan-card {
        padding: 30px;
        border-radius: 16px;
        transition: 0.3s ease;
        text-align: center;
        height: 100%;
        color: #fff;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .layanan-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .card-blue {
        background: #007bff;
    }

    .card-yellow {
        background: #ffc107;
        color: #212529;
    }

    .card-green {
        background: #28a745;
    }

    .layanan-card i {
        font-size: 40px;
        margin-bottom: 18px;
    }

    .layanan-card h5 {
        font-weight: 600;
        margin-bottom: 10px;
    }

    .layanan-card p {
        font-size: 15px;
    }

    .layanan-link {
        text-decoration: none;
        color: inherit;
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
            <h2><i class="fas fa-hand-holding-medical me-2"></i>Layanan RS Bhayangkara Aceh</h2>
            <p>Melayani dengan profesional, cepat, dan humanis sesuai standar rumah sakit modern.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <a href="<?= base_url('home/jadwal'); ?>" class="layanan-link">
                    <div class="layanan-card card-blue">
                        <i class="fas fa-user-md"></i>
                        <h5>Jadwal Dokter</h5>
                        <p>Lihat jadwal praktik dokter umum & spesialis setiap hari.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="<?= base_url('home/igd'); ?>" class="layanan-link">
                    <div class="layanan-card card-yellow">
                        <i class="fas fa-ambulance"></i>
                        <h5>IGD 24 Jam</h5>
                        <p>Layanan tanggap darurat cepat dan siap setiap waktu.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="<?= base_url('home/apotek'); ?>" class="layanan-link">
                    <div class="layanan-card card-green">
                        <i class="fas fa-pills"></i>
                        <h5>Apotek</h5>
                        <p>Cek jam buka apotek dan ketersediaan obat Anda.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
