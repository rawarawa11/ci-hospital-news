<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?= $title; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
	<style>
		body {
			font-family: 'Poppins', sans-serif;
		}

		.card {
			transition: transform 0.3s ease-in-out;
		}

		.card:hover {
			transform: translateY(-10px);
			box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
		}
		.bg-gradient {
			background: linear-gradient(to right, #ff7e5f, #feb47b);
		}

		.nav-link.active {
			font-weight: bold;
			color:rgb(15, 80, 232) !important; /* warna kuning Bootstrap */
			transition: all 0.3s ease-in-out;
		}

		.nav-link {
			transition: all 0.2s ease;
		}

		.nav-link:hover {
			color:rgb(58, 84, 215) !important;
		}

        html, body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .flex-fill {
            flex: 1;
        }

	</style>
</head>
<body>
<div class="wrapper d-flex flex-column min-vh-100">
<header class="bg-gradient shadow-sm py-3">
	<div class="container d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center">
            <img src="<?= base_url('assets/img/polda.png'); ?>" alt="News logo" class="me-2" style="width: 40px; height: auto;"/>
			<h4 class="mb-0 text-black-50">RS<span class="fw-bold">BhayangkaraAceh</span></h4>
		</div>
		<nav class="d-flex align-items-center">
			<ul class="nav me-3">
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home'); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home/profil'); ?>">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home/pelayanan'); ?>">Pelayanan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home/berita'); ?>">Berita</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home/kontak'); ?>">Kontak</a>
				</li>
			</ul>
			<a href="<?= site_url('login'); ?>" class="btn btn-warning d-flex align-items-center px-4 py-2 rounded-3">
				<i class="fas fa-sign-in-alt me-2"></i> Login
			</a>
		</nav>
	</div>
</header>

<main>