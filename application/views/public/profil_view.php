<?php $this->load->view('layout/header'); ?>

<style>
    .profil-wrapper {
        background-color: #f0f4f8;
        padding: 60px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .profil-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .profil-header h2 {
        font-weight: 700;
        color: #004085;
    }

    .profil-header p {
        color: #6c757d;
    }

    .profil-section h4 {
        font-weight: 700;
        color: #004085;
    }

    .profil-section p,
    .profil-section li {
        color: #5a5a5a;
        font-size: 16px;
    }

    .profil-section ul {
        padding-left: 20px;
    }

    .list-group-item {
        background: none;
        border: none;
        padding-left: 0;
        position: relative;
        padding-left: 24px;
    }

    .list-group-item::before {
        content: "✔";
        color: #28a745;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .profil-img {
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
    }

    @media (max-width: 768px) {
        .profil-header h2 {
            font-size: 28px;
        }
    }

    .profil-section .row {
        display: flex;
        align-items: center;
    }

    .profil-section .col-md-6 {
        order: 1;
    }
</style>

<main class="profil-wrapper">
    <div class="container">
        <div class="profil-header">
            <h2>Profil RS Bhayangkara Aceh</h2>
            <p>Informasi lengkap mengenai sejarah, visi, misi, dan layanan unggulan rumah sakit kami.</p>
        </div>

        <!-- Sejarah, Visi, Misi -->
        <div class="row align-items-center profil-section mb-5">
            <div class="col-md-6 mb-4 order-md-1">
                <img src="<?= base_url('assets/img/instansi 2.jpg'); ?>" alt="RS Bhayangkara" class="img-fluid profil-img">
            </div>
            <div class="col-md-6">
                <h4 class="mb-3">Sejarah Singkat</h4>
                <p style="text-align: justify;">
                    RS Bhayangkara Aceh didirikan untuk mendukung pelayanan kesehatan kepada anggota Polri dan masyarakat umum. Seiring waktu, rumah sakit ini berkembang menjadi pusat layanan medis yang profesional dan terpercaya di wilayah Aceh.
                </p>

                <h4 class="mt-4 mb-2">Visi</h4>
                <p class="fst-italic">"Menjadi Rumah Sakit Pilihan Utama yang Profesional dan Humanis."</p>

                <h4 class="mt-4 mb-2">Misi</h4>
                <ul>
                    <li>Menyediakan pelayanan kesehatan yang berkualitas tinggi.</li>
                    <li>Menjunjung tinggi etika profesi dan nilai kemanusiaan.</li>
                    <li>Meningkatkan kompetensi SDM secara berkelanjutan.</li>
                    <li>Menjalin kerja sama dengan berbagai pihak untuk pengembangan layanan.</li>
                </ul>
            </div>
        </div>

        <!-- Fasilitas Unggulan -->
        <div class="row profil-section">
            <div class="col">
                <h4 class="mb-4">Fasilitas Unggulan</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Instalasi Gawat Darurat 24 Jam</li>
                    <li class="list-group-item">Ruang Rawat Inap Nyaman dan Modern</li>
                    <li class="list-group-item">Laboratorium & Radiologi Lengkap</li>
                    <li class="list-group-item">Klinik Spesialis & Subspesialis</li>
                    <li class="list-group-item">Farmasi dan Apotek dengan Stok Terjamin</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
