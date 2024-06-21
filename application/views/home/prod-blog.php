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
			<h2>Semua Blog</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Product</a>
					</li>
					<li class="breadcrumb-item active">Blog</li>
				</ol>
			</nav>
		</div>
	</div>
	<section class="list" style="margin-bottom: 5%!important;box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);">
		<div class="card" style="width: 25rem;">
			<img src="http://blog.solusitukang.id/wp-content/uploads/2023/08/logo-alt.png" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Solusi Tukang</h5>
				<p class="card-text">Semua blog terkait aplikasi solusi tukang</p>
				<a href="https://blog.solusitukang.id/" class="btn btn-primary">Read More</a>
			</div>
		</div>

		<div class="card" style="width: 25rem;">
			<img src="http://blog.solusitukang.id/wp-content/uploads/2023/08/logo-alt.png" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Solusi Tukang</h5>
				<p class="card-text">Semua blog terkait aplikasi solusi tukang</p>
				<a href="https://blog.solusitukang.id/" class="btn btn-primary">Read More</a>
			</div>
		</div>

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
			<a href="#" class="badge bg-label-secondary" style="border-radius:20px;width: 100%;height:50px;font-size:15px;justify-content:center;align-items:center;padding-top:15px;margin:15px;">See All<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right-to-arc" style="margin-left: 10px;">
					<path stroke="none" d="M0 0h24v24H0z" fill="none" />
					<path d="M3 12h12" />
					<path d="M11 8l4 4l-4 4" />
					<path d="M12 21a9 9 0 0 0 0 -18" />
				</svg></a>
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