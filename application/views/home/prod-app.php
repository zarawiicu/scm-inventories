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
	<link rel="stylesheet" href="assets/vendor/libs/rateyo/rateyo.css" />

	<!-- Helpers -->
	<script src="<?= base_url("public") ?>/assets/vendor/js/helpers.js"></script>
	
	<script src="<?= base_url("public") ?>/assets/vendor/js/template-customizer.js"></script>
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<!-- <script src="< base_url("public") ?>/assets/js/front-config.js"></script> -->
</head>

<body>
	<div class="title" style="margin-top: 5%!important;">
		<div class="left">
			<h2>Semua Produk</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Product</a>
					</li>
					<li class="breadcrumb-item active">Aplikasi</li>
				</ol>
			</nav>
		</div>
		<div class="right">
			<select class="form-select" style="width:400px;margin-top:10px;box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);">
				<option value="" disabled selected hidden>Sort by popularity</option>
				<option value="1">Aplikasi 1</option>
				<option value="2">Aplikasi 2</option>
				<option value="3">Aplikasi 3</option>
			</select>
		</div>
	</div>

	<section class="banner" style="margin-bottom: 5%!important;box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);">
		<div class="col-md-4">

			<div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel" style="margin-left:20%">
				<ol class="carousel-indicators">
					<li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
					<li data-bs-target="#carouselExample-cf" data-bs-slide-to="3"></li>
					<li data-bs-target="#carouselExample-cf" data-bs-slide-to="4"></li>
					<li data-bs-target="#carouselExample-cf" data-bs-slide-to="5"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?= base_url('public/assets/img/elements/image 4.png') ?>" alt="slide 1" />
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_url('public/assets/img/elements/image 102.png') ?>" alt="slide 2" />
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_url('public/assets/img/elements/image 114.png') ?>" alt="slide 3" />
					</div>

					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_url('public/assets/img/elements/image-9.png') ?>" alt="slide 4" />
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_url('public/assets/img/elements/image 115.png') ?>" alt="slide 5" />
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_url('public/assets/img/elements/image 117.png') ?>" alt="slide 6" />
					</div>
				</div>

				<a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
		</div>
		<div class="text-right">
			<div class="col-md-6">
				<h1>Produk SCM Nih!</h1>
				<p>
					Solusi Cipta Media adalah software house yang bergerak dari tahun 2020, pastinya telah mengenbangkan ratusan solusi teknologi uuntuk website dan aplikasi mobile baik untuk suatu perusahaan, bisnis, maupun organisasi.
				</p>
			</div>
		</div>
	</section>
	<section class="list" style="padding:30px;margin-bottom: 5%!important;box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);">
		<div class="card" style="width: 18rem;">
			<img src="<?= base_url('public/assets/img/elements/image 116.png') ?>" class="card-img-top" alt="IT-Inventory">
			<div class="card-body">
				<h5 class="card-title">IT-Inventory</h5>
				<p class="card-text">Membantu anda untuk mengelola data perusahaan Anda</p>
				<a href="#" class="btn btn-primary">See all</a>
			</div>
		</div>

		<div class="card" style="width: 18rem;">
			<img src="<?= base_url('public/assets/img/elements/image 117.png') ?>" class="card-img-top" alt="Tracer Study">
			<div class="card-body">
				<h5 class="card-title">Tracer Study</h5>
				<p class="card-text">Aplikasi untuk manajemen siswa Anda</p>
				<a href="#" class="btn btn-primary">See all</a>
			</div>
		</div>

		<div class="card" style="width: 18rem;">
			<img src="<?= base_url('public/assets/img/elements/image-102.png') ?>" class="card-img-top" alt="Carwash">
			<div class="card-body">
				<h5 class="card-title">Carwash/h5>
				<p class="card-text">Memudahkan Anda dalam pelayanan carwash, cuci mobil bisa dari rumah</p>
				<a href="#" class="btn btn-primary">See all</a>
			</div>
		</div>

	</section>
	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/node-waves/node-waves.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/rateyo/rateyo.js"></script>

	<script src="<?= base_url("public") ?>/assets/vendor/libs/nouislider/nouislider.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/swiper/swiper.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
	<script src="<?= base_url("public") ?>/assets/js/front-main.js"></script> 


</body>
</html>