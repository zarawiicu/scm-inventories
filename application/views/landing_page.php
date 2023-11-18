<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url("public") ?>/assets/" data-template="front-pages">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Landing Page Toko SCM</title>


	<meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
	<meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

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

	<script src="<?= base_url("public") ?>/assets/vendor/js/dropdown-hover.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/js/mega-dropdown.js"></script>

	<!-- Hero Image -->
	<img src="<?= base_url("public") ?>/assets/img/backgrounds/scm_inventories.png" style="margin:0;padding:0;width:100%" alt="banner_SCM">


	<div class="title">
		<div class="left">
			<h2>Semua Produk</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Home</a>
					</li>
					<li class="breadcrumb-item active">Shop</li>
				</ol>
			</nav>
		</div>
		<div class="right">
			<select class="form-select" style="width:400px">
				<option value="" disabled selected hidden>Sort by popularity</option>
				<option value="1">Aplikasi 1</option>
				<option value="2">Aplikasi 2</option>
				<option value="3">Aplikasi 3</option>
			</select>
		</div>
	</div>

	<div class="banner">
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
	</div>
	<div class="title">
		<div class="left">
			<h2>Semua Blog</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Home</a>
					</li>
					<li class="breadcrumb-item active">Blog</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="list">
		<div class="card" style="width: 25rem;">
			<img src="http://blog.solusitukang.id/wp-content/uploads/2023/08/logo-alt.png" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Solusi Tukang</h5>
				<p class="card-text">Semua blog terkait aplikasi solusi tukang</p>
				<a href="https://blog.solusitukang.id/" class="btn btn-primary">Read More</a>
			</div>
		</div>
		
		<!-- Add Blog -->
		<div class="add-blog">
			<a href="#" class="badge bg-label-info"><i class="ti ti-plus"></i></a>
		</div>
	</div>
	</div>

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
