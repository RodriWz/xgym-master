<?php
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'php/db.php';

    $nama    = htmlspecialchars($_POST['name'] ?? '');
    $email   = htmlspecialchars($_POST['email'] ?? '');
    $subjek  = htmlspecialchars($_POST['subject'] ?? '');
    $pesan   = htmlspecialchars($_POST['message'] ?? '');

    $stmt = $conn->prepare("INSERT INTO kontak (nama, email, subjek, pesan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $email, $subjek, $pesan);

    if ($stmt->execute()) {
        $success = "Pesan berhasil dikirim!";
    } else {
        $success = "Gagal menyimpan data.";
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>X Gym - Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon" />
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/flaticon.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

	<!-- Header -->
	<header class="header-section">
		<a href="index.php" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<ul class="main-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="classes.php">Classes</a></li>
			<li><a class="active" href="contact.php">Contact</a></li>
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

	<!-- Page Top -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/4.jpg">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h2 class="contact-title">Kontak</h2>
					<div class="contact-info-warp">
						<h4>Location</h4>
						<div class="contact-info">
							<img src="img/icons/1-dark.png" alt="">
							<div class="cf-text">
								<p>Cendrawasih</p>
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>Subscriptions</h4>
						<div class="contact-info">
							<img src="img/icons/2-dark.png" alt="">
							<div class="cf-text">
								<p>081234567891</p>
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>E-mail</h4>
						<div class="contact-info">
							<img src="img/icons/3-dark.png" alt="">
							<div class="cf-text">
								<p>hugo@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<h2 class="contact-title">Get in touch</h2>

					<?php if ($success): ?>
						<div style="background: #c0ffc0; padding: 15px; border-radius: 6px; margin-bottom: 15px;">
							<?= $success ?>
						</div>
					<?php endif; ?>

					<form class="contact-form" method="post" action="">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" placeholder="Your name" required>
							</div>
							<div class="col-md-6">
								<input type="email" name="email" placeholder="Email" required>
							</div>
							<div class="col-md-12">
								<input type="text" name="subject" placeholder="Subject" required>
								<textarea name="message" placeholder="Message" required></textarea>
								<button class="site-btn" type="submit">Send Message</button>
							</div>
						</div>
					</form>


				</div>
			</div>
		</div>

		<!-- Google Map -->
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18..." style="border:0" allowfullscreen></iframe>
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

	<!-- JS Scripts -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>