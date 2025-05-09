<?php $this->load->view('layout/header'); ?>

<style>
.card-header-yellow {
    background-color: #ffc107; /* Bootstrap's warning color */
    color: #000; /* Teks tetap terbaca di atas kuning */
}
</style>

<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary"><i class="fas fa-calendar-check me-2"></i>Jadwal Praktik Dokter</h2>
        <p class="text-muted">Informasi jadwal dokter di RS <strong>Bhayangkara Aceh</strong>. Jadwal dapat berubah sewaktu-waktu.</p>
    </div>

    <?php if (!empty($jadwal)): ?>
        <div class="row g-4">
            <?php foreach ($jadwal as $row): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-header card-header-yellow d-flex align-items-center">
                            <i class="fas fa-user-md fa-lg me-2"></i>
                            <h5 class="mb-0"><?= $row->nama_dokter; ?></h5>
                        </div>
                        <div class="card-body">
                            <p><i class="fas fa-stethoscope text-success me-2"></i><strong>Spesialis:</strong> <?= $row->spesialis; ?></p>
                            <p><i class="fas fa-calendar-day text-warning me-2"></i><strong>Hari:</strong> <?= $row->hari; ?></p>
                            <p><i class="fas fa-clock text-danger me-2"></i><strong>Jam:</strong> <?= $row->jam; ?></p>
                        </div>
                        <div class="card-footer bg-light text-muted text-end small fst-italic">
                            RS Bhayangkara Aceh
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            <i class="fas fa-exclamation-circle me-2"></i>Belum ada jadwal dokter tersedia saat ini.
        </div>
    <?php endif; ?>
    <div class="text-center mt-4">
                        <a href="<?= site_url('home/pelayanan'); ?>" class="btn btn-success px-4 py-2">
                            <i class="fas fa-arrow-left me-2"></i> Kembali ke Pelayanan
                        </a>
                    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
