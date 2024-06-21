<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SCM Inventories</title>
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url("public") ?>/assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet">


	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/fonts/tabler-icons.css" />


	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/css/demo.css" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/node-waves/node-waves.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/nouislider/nouislider.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/swiper/swiper.css" />

	<!-- Page CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/custom-styles.css') ?>">


	<!-- Helpers -->
	<script src="<?= base_url("public") ?>/assets/vendor/js/helpers.js"></script>
	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
	<script src="<?= base_url("public") ?>/assets/vendor/js/template-customizer.js"></script>
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<!-- <script src="< base_url("public") ?>/assets/js/front-config.js"></script> -->
</head>

<body>
	<div class="title" style="margin-top: 5%!important;">
		<div class="left">
			<h2>Kalau kangen hubungi ya!</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Home</a>
					</li>
					<li class="breadcrumb-item active">Contact Us</li>
				</ol>
			</nav>
		</div>
	</div>

	<section id="contact">
		<div class="col-md mb-4 mb-md-0">
			<div class="card" style="display:flex;flex-direction:row;padding:40px;">
				<div class="card-body">
					<h1 class="card-header"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-message-plus">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M8 9h8" />
							<path d="M8 13h6" />
							<path d="M12.01 18.594l-4.01 2.406v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5" />
							<path d="M16 19h6" />
							<path d="M19 16v6" />
						</svg>Bingung Masalah Teknik?</h1>

					<div class="contact-info">
						<h4>Hubungi kami aja!</h4>
						<h6>Alamat: Jl.Subali Raya Blok 15B No 8C, Sekarpuro, Kab. Malang, Jawa Timur</h6>
						<h6>Telepon: +62 815-5590-9650</h5>
							<h6>Email: info@solusiciptamedia.com</h6>
					</div>
				</div>



				<div class="contact-form">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><center>Kirim Pesan!</center></h5>
						</div>
						<div class="modal-body">
							<div class="row g-4">
								<div class="col mb-4">
									<label for="name">Nama:</label>
									<input class="form-control" type="text" id="nama" name="nama" required>
								</div>
								<div class="col mb-4">
									<label for="email">Email:</label>
									<input class="form-control" type="email" id="email" name="email" required>
								</div>
							</div>
							<div class="row">
								<div class="col mb-4">
									<label for="message">Pesan:</label>
									<textarea class="form-control" id="message" name="message" required></textarea>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Kirim</button>
								</div>
							</div>
						</div>
					</div>
	</section>

	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/node-waves/node-waves.js"></script>

	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/nouislider/nouislider.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/swiper/swiper.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
	<!-- Main JS -->
	<!-- <script src="< base_url("public") ?>/assets/js/front-main.js"></script> -->


	<!-- Page JS -->
	<!-- <script src="< base_url("public") ?>/assets/js/front-page-landing.js"></script> -->
</body>

</html>