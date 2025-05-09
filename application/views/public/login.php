<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
  <style>
    /* Mengatur background gambar di seluruh halaman */
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url('<?= base_url('assets/img/RSBH.jpg'); ?>'); /* Ganti dengan path gambar latar belakang */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff; /* Warna teks putih agar terlihat jelas di atas background */
    }

    /* Card Container untuk Login Form */
    .login-card {
      width: 100%;
      max-width: 400px; /* Max width untuk card */
      background-color: rgba(255, 255, 255, 0.85); /* Warna latar belakang card dengan sedikit transparansi */
      padding: 40px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Logo Instansi di kiri atas card */
    .login-card .logo-wrapper {
      position: absolute;
      top: 20px; /* Jarak dari atas */
      left: 20px; /* Jarak dari kiri */
      display: flex;
      align-items: center;
    }

    .login-card .logo-wrapper img {
      max-width: 50px; /* Ukuran logo */
      margin-right: 10px;
    }

    /* Card title */
    .login-card h2 {
      font-size: 26px;
      font-weight: 700;
      color: #0056b3;
      margin-bottom: 20px;
    }

    /* Input fields */
    .login-card input {
      background-color: #f7f7f7;
      border-radius: 5px;
      border: 1px solid #ddd;
      padding: 12px;
      margin-bottom: 20px;
      width: 100%;
    }

    /* Tombol Submit */
    .login-card button {
      width: 100%;
      padding: 12px;
      background-color: #28a745; /* Green color */
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .login-card button:hover {
      background-color: #218838;
    }

    /* Pesan Error */
    .alert {
      font-weight: 600;
      background-color: #f8d7da;
      color: #721c24;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    /* Footer */
    .footer {
      text-align: center;
      font-size: 12px;
      color: #555;
      margin-top: 20px;
    }

    .footer a {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <!-- Logo Instansi di kiri atas card -->
    <div class="logo-wrapper">
      <img src="<?= base_url('assets/img/polda.png'); ?>" alt="Logo Instansi" class="logo">
      <img src="<?= base_url('assets/img/biddokes.png'); ?>" alt="Logo Instansi" class="logo">
    </div>

    <h2>Admin Login</h2>

    <!-- Pesan Error -->
    <?php if ($type == 'error' && $message && $message !== NULL): ?>
      <div class="alert alert-danger">
        <?= $message ?>
      </div>
    <?php endif ?>

    <!-- Form Login -->
    <form action="<?= base_url('login/process') ?>" method="post">
      <input type="text" class="form-control" placeholder="Username" name="username" required>
      <input type="password" class="form-control" placeholder="Password" name="password" required>
      <button type="submit">Sign in</button>
    </form>

    <!-- Footer -->
    <div class="footer">
      <p>&copy; <?= date("Y"); ?> RS Bhayangkara Aceh | <a href="#">Forgot Password?</a></p>
    </div>
  </div>
</body>
</html>
