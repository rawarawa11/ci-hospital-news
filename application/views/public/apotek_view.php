<?php $this->load->view('layout/header'); ?>

<style>
.card-apotek-header {
    background-color:#28a745;
    color: #fff;
    padding: 20px;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
}
.card-apotek-body {
    padding: 20px;
}
.card-apotek {
    border: none;
    border-radius: 0.5rem;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}
.card-apotek .list-group-item {
    border: none;
    padding-left: 0;
    padding-right: 0;
}
</style>

<!-- Konten -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-apotek">
                <div class="card-apotek-header text-center">
                    <h2 class="fw-bold mb-1"><i class="fas fa-capsules me-2"></i>Informasi Apotek</h2>
                    <p class="text-white mb-0">Temukan layanan dan ketersediaan obat di Apotek RS Bhayangkara Aceh.</p>
                </div>
                <div class="card-apotek-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-clock text-info me-2"></i>Jam buka: 08.00 - 21.00 WIB</li>
                        <li class="list-group-item"><i class="fas fa-user-nurse text-success me-2"></i>Konsultasi farmasi gratis</li>
                        <li class="list-group-item"><i class="fas fa-capsules text-warning me-2"></i>Tersedia obat generik & paten</li>
                    </ul>

                    <div class="text-center mt-4">
                        <a href="<?= site_url('home/pelayanan'); ?>" class="btn btn-warning px-4 py-2">
                            <i class="fas fa-arrow-left me-2"></i> Kembali ke Pelayanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
