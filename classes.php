<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>X Gym - Fitness HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


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
			<li><a href="about.php">About Us</a></li>
			<li><a class="active" href="classes.php">Classes</a></li>
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
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/2.jpg">
		<div class="container">
			<h2>Classes</h2>
		</div>
	</section>
	<!-- Page top section end -->


	<!-- Service section -->
	<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-050-weightlifting"></i>
						</div>
						<h4>Bodybuilding</h4>
						<p>Membantu Anda membangun massa otot dan mencapai bentuk tubuh yang ideal melalui latihan beban yang terstruktur.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-045-fitness"></i>
						</div>
						<h4>Finess</h4>
						<p>Tingkatkan kebugaran tubuh secara menyeluruh dengan program fitness yang menggabungkan latihan kardio, kekuatan, dan fleksibilitas.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-033-pump"></i>
						</div>
						<h4>Aerobics</h4>
						<p> Rasakan keseruan berolahraga sambil membakar kalori melalui gerakan aerobik yang energik dan menyenangkan </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-017-weightlifting-1"></i>
						</div>
						<h4>Pilates</h4>
						<p>Perkuat otot inti, tingkatkan postur tubuh, dan capai keseimbangan pikiran-tubuh melalui latihan Pilates yang fokus dan terkontrol. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-004-dumbbell"></i>
						</div>
						<h4>Wheight Lifting</h4>
						<p>Kembangkan kekuatan dan daya tahan otot dengan program weight lifting yang aman dan efektif untuk semua level.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-038-vitamins"></i>
						</div>
						<h4>Nutrition</h4>
						<p>Dapatkan panduan nutrisi yang tepat untuk mendukung program latihan Anda dan mencapai gaya hidup sehat yang berkelanjutan.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->

	<!-- Pricing section end -->
	<section class="pricing-section set-bg" data-setbg="img/pricing-bg.jpg">
		<div class="container">
			<div class="section-title text-white text-center">
				<h2>Prices for <span>everybody</span></h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$10</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li><span></span></li>
							<li><span></span></li>
							<li><span></span></li>
						</ul>
						<a href="form.php" class="site-btn">Choose Plan</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$25</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li>Sauna</li>
							<li><span></span></li>
							<li><span></span></li>
						</ul>
						<a href="form.php" class="site-btn">Choose Plan</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$45</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li>Sauna</li>
							<li>Personal Trainer</li>
							<li>Massage</li>
						</ul>
						<a href="form.php" class="site-btn">Choose Plan</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$60</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li>Sauna</li>
							<li>Personal Trainer</li>
							<li>Massage</li>
							<li>Dietician</li>
						</ul>
						<a href="form.php" class="site-btn">Choose Plan</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing section  -->

	<!-- Classes section -->
	<section class="classes-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
				<div class="section-title">
              <h3>Apakah Anda membutuhkan <span>bimbingan profesional</span><br> untuk mencapai target fitness yang optimal?</h3></div>
				</div>
				<div class="col-lg-6">
					<div class="classes-text">
						<p>Tim personal trainer kami telah berpengalaman bertahun-tahun membantu klien mencapai berbagai tujuan fitness, dari penurunan berat badan hingga pembentukan otot.</p>
						<a href="contact.php" class="site-btn">Send us a message</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers section end -->


	<!-- Footer section -->
	<<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
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
