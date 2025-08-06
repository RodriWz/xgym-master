<?php
session_start();
require 'php/db.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
	header("Location: ../login.php");
	exit;
}

// Ambil data statistik
$totalTrainer = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pelatih"));
$totalMember = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM member"));
$totalKontak = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kontak"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Admin | XGYM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<!-- Navbar -->
<div class="navbar-admin">
	<div class="logo">X Gym Admin</div>
	<nav>
		<a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a>
		<a href="trainer.php" class="<?= basename($_SERVER['PHP_SELF']) == 'trainer.php' ? 'active' : '' ?>">Trainer</a>
		<a href="member.php" class="<?= basename($_SERVER['PHP_SELF']) == 'member.php' ? 'active' : '' ?>">Member</a>
		<a href="kontak.php" class="<?= basename($_SERVER['PHP_SELF']) == 'kontak.php' ? 'active' : '' ?>">Kontak</a>
		<a href="php/logout.php" class="logout">Logout</a>
	</nav>
</div>

<!-- Konten -->
<div class="dashboard-content container">
	<h2 class="welcome-text">Selamat Datang, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
	<p class="welcome-subtext">Berikut ringkasan data sistem saat ini:</p>

	<div class="stats row">
		<div class="col-md-4">
			<div class="stat-card yellow">Trainer <span><?= $totalTrainer ?></span></div>
		</div>
		<div class="col-md-4">
			<div class="stat-card blue">Member <span><?= $totalMember ?></span></div>
		</div>
		<div class="col-md-4">
			<div class="stat-card green">Kontak <span><?= $totalKontak ?></span></div>
		</div>
	</div>

	<canvas id="chartPendaftaran"></canvas>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	const ctx = document.getElementById('chartPendaftaran').getContext('2d');
	const chart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Trainer', 'Member', 'Kontak'],
			datasets: [{
				label: 'Jumlah Data',
				data: [<?= $totalTrainer ?>, <?= $totalMember ?>, <?= $totalKontak ?>],
				backgroundColor: ['#f1c40f', '#3498db', '#2ecc71']
			}]
		},
		options: {
			responsive: true,
			scales: {
				y: {
					beginAtZero: true,
					ticks: { stepSize: 1 }
				}
			}
		}
	});
</script>

</body>
</html>
