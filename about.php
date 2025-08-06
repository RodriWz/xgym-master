<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>X Gym - Fitness HTML Template</title>
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

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css" />


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<ul class="main-menu">
			<li><a href="index.php">Home</a></li>
			<li><a class="active" href="about.php">About Us</a></li>
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
					<h4> Cendrawasih </h4>
				</div>
			</li>
		</ul>
	</header>
	<div class="clearfix"></div>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/1.jpg">
		<div class="container">
			<h2>About us</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Trainers section -->
	<section class="trainers-section">
		<div class="container">
			<div class="section-title text-center">
				<h2><span>Trainers</span></h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="img/trainers/1.jpg" alt="">
						</div>
						<h4>Michael Smith</h4>
						<p>Pelatih Fisik & Transformation Coach Spesialis dalam pembentukan otot dan program transformasi tubuh menyeluruh. Memiliki pengalaman lebih dari 10 tahun.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="img/trainers/2.jpg" alt="">
						</div>
						<h4>Jessica Black</h4>
						<p>Instruktur Yoga & Keseimbangan Tubuh Membantu klien meningkatkan fleksibilitas dan kesehatan mental melalui yoga, pilates, dan meditasi.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="img/trainers/3.jpg" alt="">
						</div>
						<h4>James Brown</h4>
						<p>Pelatih Kekuatan & Kondisi Fisik Ahli dalam program peningkatan kekuatan, daya tahan, dan performa atletik. Fokus pada hasil nyata dan teknik yang tepat.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="img/trainers/4.jpg" alt="">
						</div>
						<h4>Paula Carlton</h4>
						<p>Pelatih Wanita & Fat Loss Specialist Berpengalaman dalam membantu wanita mencapai tubuh ideal melalui pendekatan nutrisi dan latihan yang personal.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers section end -->


	<!-- About section -->
	<section class="about-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-5">
					<div class="section-title text-center">
						<h2><span>Gabung sekarang </span> dan mulailah perjalanan hidup sehat Anda!</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="about-text">
						<p>Kesehatan Anda adalah prioritas kami. Dengan pendekatan berbasis nutrisi seimbang dan aktivitas fisik teratur, kami membantu Anda mencapai tubuh yang lebih sehat dan bugar. </p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about-text">
						<p>Program kami dirancang untuk semua usia dan tingkat kebugaran. Dapatkan panduan ahli, dukungan komunitas, dan hasil nyata—karena Anda pantas merasakan hidup dengan penuh energi.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about-img">
						<img src="img/about-img.png" alt="">
					</div>
				</div>
			</div>
			<div class="text-center pt-4">
				<a href="form.php" class="site-btn">Become a Member</a>
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Certified section -->
	<section class="certified-section spad set-bg" data-setbg="img/certified-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 ml-auto">
					<div class="section-title">
						<h2><span>Dapatkan sertifikasi </span> sebagai <br> Pelatih Profesional</h2>
						<p>Jadilah bagian dari komunitas pelatih profesional yang membantu mengubah hidup orang lain melalui gaya hidup sehat dan aktif. </p>
					</div>
					<form action="php/submit_pelatih.php" method="post" enctype="multipart/form-data" class="certified-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="nama" placeholder="Your name" required>
							</div>
							<div class="col-md-6">
								<input type="email" name="email" placeholder="Your e-mail" required>
							</div>
							<div class="col-md-12">
								<input type="text" name="subject" placeholder="Subject" required>
							</div>
							<div class="col-md-6">
								<label class="btn-upload">
									Lampiran CV
									<input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required style="display: none;">
								</label>
							</div>
							<div class="col-md-6">
								<button type="submit" class="site-btn-yellow">Kirim</button>
							</div>
						</div>
					</form>
					<?php if (isset($_GET['success'])): ?>
						<script>
							<?php if ($_GET['success'] == 1): ?>
								alert("✅ Pendaftaran pelatih berhasil dikirim!");
							<?php else: ?>
								alert("❌ Gagal mengunggah CV. Silakan coba lagi.");
							<?php endif; ?>
						</script>
					<?php endif; ?>


				</div>
			</div>
		</div>
	</section>
	<!-- Certified section end -->


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

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>