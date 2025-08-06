<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<title>Hugo</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/flaticon.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="index.php" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<ul class="main-menu">
			<li><a class="active" href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="classes.php">Classes</a></li>
			<li><a href="contact.php">Contact</a></li>
			<?php if (isset($_SESSION['user'])): ?>
				<li><a href="php/logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a></li>
			<?php else: ?>
				<li><a href="php/login.php">Logout</a></li>
			<?php endif; ?>

			<li class="header-right">
				<div class="hr-box">
					<img src="img/location-icon.png" alt="">
					<h4>Cendrawasih</h4>
				</div>
			</li>
		</ul>
	</header>
	<div class="clearfix"></div>

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
		<div class="container">
			<div class="hero-text">
				<h2>Aktivitas Fisik</h2>
				<h2>meningkatkan <span>energi positif!</span></h2>
				<a href="form.php" class="site-btn">Join the Gym</a>
			</div>
		</div>
	</section>

	<!-- Feature section -->
	<section class="feature-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Latihan sesungguhnya <span>dimulai</span> ketika Anda ingin berhenti.</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class='col-md-4'>
					<div class='icon-box-item'>
						<div class='ib-icon'>
							<i class='flaticon-004-dumbbell'></i>
						</div>
						<h4>Intense Workouts</h4>
						<p>Latihan berdurasi singkat, intensitas tinggi. Bakar lebih banyak kalori, tingkatkan kekuatan, dan rasakan perubahan hanya dalam hitungan minggu!</p>
					</div>
				</div>
				<div class='col-md-4'>
					<div class='icon-box-item'>
						<div class='ib-icon'>
							<i class='flaticon-031-app-1'></i>
						</div>
						<h4>Intense Workouts</h4>
						<p>Gerakkan tubuh secara maksimal dalam waktu minimal. Program intens yang dirancang untuk mempercepat pembakaran lemak dan menjaga daya tahan tubuh.</p>
					</div>
				</div>
				<div class='col-md-4'>
					<div class='icon-box-item'>
						<div class='ib-icon'>
							<i class='flaticon-010-podium'></i>
						</div>
						<h4>Intense Workouts</h4>
						<p>Tantang batasmu, capai hasil luar biasa. Latihan intens ini cocok untuk kamu yang ingin transformasi tubuh dan mental secara cepat dan terukur.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Add section -->
	<section class="add-section set-bg" data-setbg="img/add-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto">
					<div class="add-text">
						<h2>💪 Gabung hari ini dan nikmati program latihan terbaik dengan harga lebih hemat! <span>Discount</span></h2>
						<ul>
							<li><img src="img/check-icon.png" alt="">Program latihan intens untuk hasil cepat dan nyata</li>
							<li><img src="img/check-icon.png" alt="">Didampingi pelatih berpengalaman dan profesional</li>
							<li><img src="img/check-icon.png" alt="">Akses penuh ke semua fasilitas dan kelas eksklusif</li>
						</ul>
						<a href="form.php" class="site-btn">🔶 Jadi Member Sekarang 🔶</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Trainers section -->
	<section class="trainers-section">
		<div class="container">
			<div class="section-title text-center">
				<h2><span>Trainers</span></h2>
			</div>
			<div class="row">
				<div class='col-lg-3 col-sm-6'>
					<div class='trainer-item'>
						<div class='trainer-pic'>
							<img src='img/trainers/1.jpg' alt=''>
						</div>
						<h4>Michael Smith</h4>
						<p>Pelatih Fisik & Transformation Coach...</p>
					</div>
				</div>
				<div class='col-lg-3 col-sm-6'>
					<div class='trainer-item'>
						<div class='trainer-pic'>
							<img src='img/trainers/2.jpg' alt=''>
						</div>
						<h4>Jessica Black</h4>
						<p>Instruktur Yoga & Keseimbangan Tubuh...</p>
					</div>
				</div>
				<div class='col-lg-3 col-sm-6'>
					<div class='trainer-item'>
						<div class='trainer-pic'>
							<img src='img/trainers/3.jpg' alt=''>
						</div>
						<h4>James Brown</h4>
						<p>Pelatih Kekuatan & Kondisi Fisik...</p>
					</div>
				</div>
				<div class='col-lg-3 col-sm-6'>
					<div class='trainer-item'>
						<div class='trainer-pic'>
							<img src='img/trainers/4.jpg' alt=''>
						</div>
						<h4>Paula Carlton</h4>
						<p>Pelatih Wanita & Fat Loss Specialist...</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- BMI section -->
	<section class="bmi-section spad">
		<div class="bmi-bg set-bg" data-setbg="img/bmi-bg.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto">
					<div class="section-title mb-0">
						<h2>Calculate your <span>BMI</span></h2>
						<p>Ketahui apakah berat badanmu ideal hanya dalam hitungan detik!</p>
					</div>
					<div class="bmi-calculator-warp">
						<div class="bmi-calculator">
							<div class="row">
								<div class="col-sm-6"><input type="text" placeholder="Weight (KG)" id="bmi-weight"></div>
								<div class="col-sm-6"><input type="text" placeholder="Height (M)" id="bmi-height"></div>
								<div class="col-sm-6"><button class="site-btn" id="bmi-submit">Calculate</button></div>
								<div class="col-sm-6"><input type="text" id="bmi-result" readonly></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Location</h4>
						<div class="fw-info-box">
							<img src="img/icons/1.png" alt="">
							<div class="fw-info-text">
								<p>Cendrawasih</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Subscriptions</h4>
						<div class="fw-info-box">
							<img src="img/icons/2.png" alt="">
							<div class="fw-info-text">
								<p> 081234567891 </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>E-mail</h4>
						<div class="fw-info-box">
							<img src="img/icons/3.png" alt="">
							<div class="fw-info-text">
								<p> hugo@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Social Media</h4>
						<div class="fw-info-box">
							<img src="img/icons/4.png" alt="">
							<div class="social-links">
								<a href="#"><i class="fa fa-pinterest"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 order-2 order-md-1">
				</div>
				<div class="col-md-6 order-1 order-md-2">
					<ul class="footer-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="classes.php">Classes</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!-- Scripts -->

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>