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
			<h2>Lihat beberapa projek terbaik kami, yang Kreatif dan inovatif</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Home</a>
					</li>
					<li class="breadcrumb-item active">Portofolio</li>
				</ol>
			</nav>
		</div>
	</div>
	<section class="row" style="background-color:white;padding:30px;padding-right: 0!important;margin-bottom: 5%!important;box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);">
		<div class="col-md">
			<div class="card mb-3" style="width: 800px;">
				<div class="row g-0">
					<div class="col-md-4">
						<img class="card-img card-img-left" src="<?= base_url("public/assets/img/branding/aai-system.jpg") ?>" alt="Card image" />
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">AAI System Manajemen</h5>
							<p class="card-text"></p>
							Aplikasi untuk meningkatkan manajemen proses bisnis perusahaan
							</p>
							<p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md" style="padding-right:40px!important">
			<div class="card mb-3" style="width: 800px;">
				<div class="row g-0">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">E-Commerce</h5>
							<p class="card-text">
								Aplikasi yang membantu mengelola
								panjualan lebih efisien
							</p>
							<p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
						</div>
					</div>
					<div class="col-md-4">
						<img class="card-img card-img-right" src="<?= base_url("public/assets/img/branding/e-commerce.jpg") ?>" alt="Card image" />
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md">
				<div class="card mb-3" style="width: 800px">
					<div class="row g-0">
						<div class="col-md-4">
							<img class="card-img card-img-left" src="<?= base_url("public/assets/img/branding/e-bumn.jpg") ?>" alt="Card image" />
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Inventory E-BUMN</h5>
								<p class="card-text"></p>
								Aplikasi pengelolaan aset barang milik Perusahaan Negara
								</p>
								<p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md">
				<div class="card mb-3" style="width: 800px">
					<div class="row g-0">
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Projek Manjemen</h5>
								<p class="card-text">
									Aplikasi yang mengelola seluruh projek mulai awal sampai akhir
								</p>
								<p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
							</div>
						</div>
						<div class="col-md-4">
							<img class="card-img card-img-right" src="<?= base_url("public/assets/img/branding/prod_manajemen.jpg") ?>" alt="Card image" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-5">
				<div class="col-md">
					<div class="card mb-3">
						<div class="row g-0">
							<div class="col-md-4">
								<img class="card-img card-img-left" src="<?= base_url("public") ?>/assets/img/elements/image 2.png" alt="Card image" />
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title">Aplikasi Inventories Gudang</h5>
									<p class="card-text"></p>
										dengan aplikasi ini Anda daapt dengan mudah mengatur gudang Anda
									</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="card mb-3">
						<div class="row g-0">
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title">Aplikasi Cafe & Resto</h5>
									<p class="card-text">
										Ini adalah solusi untuk mengatur cafe atau restorant Anda
									</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
							</div>
							<div class="col-md-4">
								<img class="card-img card-img-right" src="<?= base_url("public") ?>/assets/img/elements/image 102.png" alt="Card image" />
							</div>
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