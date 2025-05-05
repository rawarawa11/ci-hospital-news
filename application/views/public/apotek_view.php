<?php $this->load->view('layout/header'); ?>

<!-- Konten -->
<div class="container mb-5">
    <h2 class="text-info fw-bold text-center mb-4">Informasi Apotek</h2>
    <p class="text-center text-muted">Temukan layanan dan ketersediaan obat di Apotek RS Bhayangkara Aceh.</p>

    <ul class="list-group list-group-flush shadow-sm">
        <li class="list-group-item"><i class="fas fa-clock text-info me-2"></i>Jam buka: 08.00 - 21.00 WIB</li>
        <li class="list-group-item"><i class="fas fa-user-nurse text-success me-2"></i>Konsultasi farmasi gratis</li>
        <li class="list-group-item"><i class="fas fa-capsules text-warning me-2"></i>Tersedia obat generik & paten</li>
    </ul>

    <div class="text-center mt-4">
        <a href="<?= site_url('home/pelayanan'); ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i> Kembali ke Pelayanan
        </a>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
