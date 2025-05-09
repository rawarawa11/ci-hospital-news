<?php $this->load->view('layout/header'); ?>

<style>
    .profil-wrapper {
        background: #f8fcff;
        padding: 60px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .profil-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .profil-header h2 {
        font-weight: 700;
        color: #007b8a;
    }

    .profil-header p {
        color: #6c757d;
        font-size: 18px;
    }

    .profil-section h4 {
        font-weight: 700;
        color: #007b8a;
        border-left: 4px solid #2db3b5;
        padding-left: 12px;
        margin-bottom: 16px;
    }

    .profil-section p,
    .profil-section li {
        color: #444;
        font-size: 16px;
    }

    .profil-section ul {
        padding-left: 20px;
    }

    .list-group-item {
        background: #e7f9f9;
        border: 1px solid #cfeeee;
        margin-bottom: 10px;
        border-radius: 6px;
        padding: 12px 18px;
        color: #00696e;
    }

    .list-group-item::before {
        content: "🩺";
        margin-right: 10px;
    }

    .profil-img {
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 123, 138, 0.1);
        width: 100%;
        max-width: 100%;
        transition: 0.3s ease-in-out;
    }

    .profil-img:hover {
        transform: scale(1.02);
    }

    @media (max-width: 768px) {
        .profil-header h2 {
            font-size: 28px;
        }
    }
</style>

<main class="profil-wrapper">
    <div class="container">
        <!-- Header -->
        <div class="profil-header">
            <h2><i class="fas fa-clinic-medical me-2"></i>Profil RS Bhayangkara Aceh</h2>
            <p>Informasi lengkap mengenai identitas, visi misi, dan layanan unggulan rumah sakit kami.</p>
        </div>

        <!-- Sejarah, Visi, Misi -->
        <div class="row align-items-center profil-section mb-5">
            <div class="col-md-6 mb-4">
                <img src="<?= base_url('assets/img/instansi 2.jpg'); ?>" alt="RS Bhayangkara" class="img-fluid profil-img">
            </div>
            <div class="col-md-6">
                <h4>Sejarah Singkat</h4>
                <p style="text-align: justify;">
                    RS Bhayangkara Aceh hadir sebagai bagian dari kepedulian Polri dalam memberikan pelayanan kesehatan yang amanah, profesional, dan merata bagi anggota serta masyarakat umum. Seiring waktu, rumah sakit ini berkembang menjadi pusat rujukan kesehatan di Aceh.
                </p>

                <h4 class="mt-4">Visi</h4>
                <p class="fst-italic">"Menjadi Rumah Sakit Pilihan Utama yang Profesional, Humanis, dan Terpercaya."</p>

                <h4 class="mt-4">Misi</h4>
                <ul class="list-group">
                    <li class="list-group-item">Memberikan layanan kesehatan berkualitas dan terstandar.</li>
                    <li class="list-group-item">Menjaga integritas dan etika dalam setiap tindakan medis.</li>
                    <li class="list-group-item">Meningkatkan kompetensi tenaga medis dan nonmedis.</li>
                    <li class="list-group-item">Bersinergi dengan instansi kesehatan dan masyarakat luas.</li>
                </ul>
            </div>
        </div>

        <!-- Fasilitas Unggulan -->
        <div class="row profil-section">
            <div class="col">
                <h4>Fasilitas Unggulan</h4>
                <ul class="list-group">
                    <li class="list-group-item">IGD 24 Jam dengan tenaga medis profesional</li>
                    <li class="list-group-item">Ruang rawat inap modern & nyaman</li>
                    <li class="list-group-item">Layanan radiologi, USG & laboratorium lengkap</li>
                    <li class="list-group-item">Klinik spesialis seperti jantung, paru, anak, dan lainnya</li>
                    <li class="list-group-item">Farmasi dengan pelayanan cepat dan aman</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
