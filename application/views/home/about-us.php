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
			<h2>Kenalan sama kami kuy!!</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="javascript:void(0);">Home</a>
					</li>
					<li class="breadcrumb-item active">About Us</li>
				</ol>
			</nav>
		</div>
	</div>

	<section>
		<div class="row" style="margin-bottom: 5%!important;box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);">
			<div class="col-md">
				<div class="card mb-6" style="padding: 20px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img class="card-img card-img-left" src="<?= base_url('public/assets/img/backgrounds/Kantor Scm.jpg') ?>" alt="Card image" />
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Solusi Cipta Media</h5>
								<p class="card-text">
									SCM atau Solusi Cipta Media adalah salah satu software house yang ada di Kota Malang . SCM berdiri sejak tahun 2020.
									SCM melayani aplikasi cuctom sesuai kebutuhan bisa bisnis, organisasi ataupun pemerintahan
								</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-white" style="margin-bottom: 5%!important;box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.2);width:100%;height: 600px;">
		<div class="container pb-15 pb-md-17">
			<div class="row position-relative">
				<figure class="rounded position-absolute d-none d-lg-block" style="top:50%;right:0;width:45%;height:auto;z-index:2;transform:translateY(-50%)"><img src="<?= base_url('public/assets/img/backgrounds/resto.jpg') ?>" alt="Testimonial 1" style="width:600px" /></figure>
				<div class="col-lg-9 text-center">
					<div class="card bg-gray" style="height: 500px;">
						<div class="card-body p-md-10 py-xxl-16">
							
								<h2 style="color: white !important;display:flex;flex-direction:row;">Feedback Konsumen...</h2>
							
							<div class="row gx-0">
								<div class="col-lg-8 ps-xl-10">
									<div class="basic-ratings"></div>
									<blockquote class="border-0 fs-lg mb-0">
										<p style="color:white!important;padding-top:15%;padding-left:30px;font-size:20px;" class="text-center">“Aplikasi buatan SCM ini sesuai kebutuhan bisnis saya, karna bisa custom tergantung fitur yang dibutuhkan. Ada layanan konsultasinya jadi dari awal bisa dapat gambaran lebih jelas, customer servicenya juga ramah dan kalo ada bugs selalu d bantu walaupun transaksi udah selese. Mantap lah pokonya, semoga sukses terus tim SCM”</p>
										<div class="justify-content-center text-center">
											<div class="info p-0">
												<h4 class="ls-sm mb-1" style="color:white!important">Coriss Ambady</h4>
												<p class="mb-0" style="color:white!important">Aplikasi Cafe &amp; Resto</p>
											</div>
										</div>
									</blockquote>
								</div>
							</div>
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
	<script>
		$('.basic-ratings').rateYo({
			rating: 3.6
		});
	</script>
	<!-- Main JS -->
	<!-- <script src="< base_url("public") ?>/assets/js/front-main.js"></script> -->


	<!-- Page JS -->
	<!-- <script src="< base_url("public") ?>/assets/js/front-page-landing.js"></script> -->
</body>

</html>