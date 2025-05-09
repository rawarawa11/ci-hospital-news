<?php $this->load->view('layout/header'); ?>

<style>
.igd-card {
    background-color: #ffffff;
    border-radius: 1rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.igd-header {
    background: linear-gradient(to right,rgb(223, 169, 6), #ffc107);
    padding: 30px;
    color: #fff;
    text-align: center;
}

.igd-header h2 {
    font-weight: 700;
    margin-bottom: 10px;
}

.igd-body {
    padding: 40px;
}

.igd-section {
    margin-bottom: 30px;
}

.igd-section h5 {
    font-weight: 600;
    color: #ffc107;
    margin-bottom: 15px;
    border-bottom: 2px solid #f2f2f2;
    padding-bottom: 5px;
}

.igd-section p, .igd-section li {
    font-size: 16px;
    color: #333;
}

.igd-section li {
    list-style: none;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.igd-section li i {
    color: #ffc107;
    margin-right: 10px;
    font-size: 18px;
}

.btn-back {
    border-radius: 50px;
    padding: 10px 30px;
    font-weight: 600;
}
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="igd-card">
                <div class="igd-header">
                    <h2><i class="fas fa-hospital me-2"></i>Layanan IGD 24 Jam</h2>
                    <p>Pelayanan terbaik untuk kasus gawat darurat dengan fasilitas modern dan tenaga profesional.</p>
                </div>
                <div class="igd-body">

                    <div class="igd-section">
                        <h5><i class="fas fa-ambulance me-2"></i>Unit Ambulans</h5>
                        <p>Kami memiliki <strong>3 unit ambulans</strong> yang selalu siaga untuk kebutuhan darurat 24 jam.</p>
                    </div>

                    <div class="igd-section">
                        <h5><i class="fas fa-procedures me-2"></i>Bangsal IGD</h5>
                        <p>Disediakan <strong>10 tempat tidur</strong> di ruang IGD dengan sistem pemantauan pasien real-time.</p>
                    </div>

                    <div class="igd-section">
                        <h5><i class="fas fa-calendar-check me-2"></i>Jadwal Operasi</h5>
                        <ul>
                            <li><i class="fas fa-clock"></i> Senin & Kamis: 08.00 - 14.00</li>
                            <li><i class="fas fa-clock"></i> Selasa & Jumat: 10.00 - 16.00</li>
                            <li><i class="fas fa-clock"></i> Sabtu: <em>Untuk keadaan darurat saja</em></li>
                        </ul>
                    </div>

                    <div class="igd-section">
                        <h5><i class="fas fa-tools me-2"></i>Fasilitas IGD</h5>
                        <ul>
                            <li><i class="fas fa-heartbeat"></i> Monitor pasien & alat resusitasi</li>
                            <li><i class="fas fa-wave-square"></i> EKG & Defibrillator</li>
                            <li><i class="fas fa-user-nurse"></i> Tim triase & trauma berpengalaman</li>
                            <li><i class="fas fa-procedures"></i> Ruang observasi & minor OR</li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <a href="<?= site_url('home/pelayanan'); ?>" class="btn btn-outline-warning btn-back mt-3">
                            <i class="fas fa-arrow-left me-2"></i> Kembali ke Pelayanan
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
