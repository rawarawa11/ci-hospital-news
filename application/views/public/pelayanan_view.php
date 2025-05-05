<?php $this->load->view('layout/header'); ?>

<div class="container py-5">
    <h2 class="text-center text-primary fw-bold mb-4">Layanan yang Tersedia</h2>

    <!-- Kartu Pilihan Layanan -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-4 mb-3">
            <a href="<?= base_url('home/jadwal'); ?>" class="text-decoration-none">
                <div class="card h-100 text-center p-3 layanan-card">
                    <div class="card-body">
                        <i class="fas fa-user-md fa-2x text-success mb-3"></i>
                        <h5 class="card-title">Jadwal Dokter</h5>
                        <p class="text-muted">Lihat jadwal dokter umum dan spesialis kami.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="<?= base_url('home/igd'); ?>" class="text-decoration-none">
                <div class="card h-100 text-center p-3 layanan-card">
                    <div class="card-body">
                        <i class="fas fa-ambulance fa-2x text-danger mb-3"></i>
                        <h5 class="card-title">Pelayanan IGD</h5>
                        <p class="text-muted">Informasi tentang layanan gawat darurat 24 jam.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="<?= base_url('home/apotek'); ?>" class="text-decoration-none">
                <div class="card h-100 text-center p-3 layanan-card">
                    <div class="card-body">
                        <i class="fas fa-pills fa-2x text-info mb-3"></i>
                        <h5 class="card-title">Apotek</h5>
                        <p class="text-muted">Cek ketersediaan obat dan jam buka apotek.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>

<!-- Bootstrap & FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
