<?php $this->load->view('layout/header'); ?>

<style>
    .contact-wrapper {
        background: #f0f4f8;
        padding: 60px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .contact-header h2 {
        font-weight: 700;
        color: #004085;
    }

    .contact-header p {
        color: #6c757d;
    }

    .contact-card {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease-in-out;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }

    .contact-info i {
        font-size: 22px;
        color: #007bff;
        margin-right: 15px;
    }

    .form-control {
        border-radius: 8px;
    }

    .btn-primary {
        border-radius: 30px;
        background-color: #007bff;
        padding: 10px 25px;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .map-container iframe {
        border: none;
        border-radius: 12px;
        width: 100%;
        height: 400px;
        margin-top: 40px;
    }

    @media (max-width: 767px) {
        .contact-card {
            margin-bottom: 30px;
        }
    }
</style>

<main class="contact-wrapper">
    <div class="container">
        <div class="contact-header">
            <h2>Hubungi Kami</h2>
            <p>Kami selalu siap menjawab pertanyaan atau saran Anda.</p>
        </div>

        <div class="row">
            <!-- Formulir Kontak -->
            <div class="col-lg-6">
                <div class="contact-card">
                    <h4 class="mb-4">Kirim Pesan</h4>
                    <form action="<?= site_url('kontak/submit'); ?>" method="POST">
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama lengkap" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="email@domain.com" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Pesan</label>
                            <textarea class="form-control" name="message" rows="5" placeholder="Tuliskan pesan Anda..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Info Kontak -->
            <div class="col-lg-6">
                <div class="contact-card h-100">
                    <h4 class="mb-4">Informasi Kontak</h4>
                    <div class="contact-info mb-3 d-flex align-items-center">
                        <i class="fas fa-phone-alt"></i>
                        <span>+62 812 345 6789</span>
                    </div>
                    <div class="contact-info mb-3 d-flex align-items-center">
                        <i class="fas fa-envelope"></i>
                        <span>contact@rsbhayangkaraaceh.com</span>
                    </div>
                    <div class="contact-info mb-3 d-flex align-items-center">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jl. Raya Bhayangkara No. 123, Banda Aceh</span>
                    </div>
                    <div class="contact-info d-flex align-items-center">
                        <i class="fas fa-clock"></i>
                        <span>Senin - Jumat: 08.00 - 16.00 WIB</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3774.7575378718434!2d95.295512!3d5.52962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30403a0d797d46fb%3A0x5d6e19cea939d98b!2sRumah%20Sakit%20Bhayangkara%20Polda%20Aceh!5e1!3m2!1sid!2sid!4v1746438570011!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
