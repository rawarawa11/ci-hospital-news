<?php $this->load->view('layout/header'); ?>

<!-- Konten -->
<div class="container mb-5">
    <h2 class="text-danger fw-bold text-center mb-4">Layanan IGD 24 Jam</h2>
    <p class="text-center text-muted">Pelayanan Gawat Darurat kami tersedia setiap hari, siap membantu dalam keadaan darurat medis.</p>

    <ul class="list-group list-group-flush shadow-sm">
        <li class="list-group-item"><i class="fas fa-ambulance text-danger me-2"></i>Ambulans siaga 24 jam</li>
        <li class="list-group-item"><i class="fas fa-user-md text-success me-2"></i>Dokter & perawat profesional dan terlatih</li>
        <li class="list-group-item"><i class="fas fa-hospital text-primary me-2"></i>Fasilitas emergency lengkap dan modern</li>
    </ul>

    <div class="text-center mt-4">
        <a href="<?= site_url('home/pelayanan'); ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i> Kembali ke Pelayanan
        </a>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
