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

<!-- Navbar: Start -->
<nav class="header">
			<div class="navbar navbar-expand-lg landing-navbar px-3 px-lg-4">
				<!-- Menu logo wrapper: Start -->
				<div class="navbar-brand app-brand d d-flex py-0 py-lg-2 me-4">
					<!-- Mobile menu toggle: Start-->
					<button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="ti ti-menu-2 ti-sm align-middle"></i>
					</button>

					<!-- Mobile menu toggle: End-->
					<a href="index" class="app-brand-link">
						<span class="app-brand-logo">
							<img src="<?= base_url("public/assets/img/backgrounds/scm.png") ?>" alt="logo" style="width:100px;height:30px;">
						</span>
					</a>
				</div>

				<!-- Menu logo wrapper: End -->
				<!-- Menu wrapper: Start -->
				<div class="collapse navbar-collapse landing-nav-menu justify-content-between" id="navbarSupportedContent">
					<button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="ti ti-x ti-sm"></i>
					</button>
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a class="nav-link fw-medium align-items-center" aria-current="page" href="">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-medium align-items-center" href="">About Us</a>
						</li>
						<li class="nav-item mega-dropdown">
							<a href="javascript:void(0);" class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium align-items-center" aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
								<span data-i18n="Pages">Services</span>
							</a>
							<div class="dropdown-menu p-4">
								<div class="row gy-4">
									<div class="col-12 col-lg">
										<div class="h6 d-flex align-items-center mb-2 mb-lg-3">
											<div class="avatar avatar-sm flex-shrink-0 me-2">
												<span class="avatar-initial rounded bg-label-primary"><i class='ti ti-layout-grid'></i></span>
											</div>
											<span class="ps-1">Other</span>
										</div>
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link mega-dropdown-link" href="pricing-page.html">
													<i class='ti ti-circle me-1'></i>
													<span data-i18n="Pricing">Pricing</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link mega-dropdown-link" href="payment-page.html">
													<i class='ti ti-circle me-1'></i>
													<span data-i18n="Payment">Payment</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link mega-dropdown-link" href="checkout-page.html">
													<i class='ti ti-circle me-1'></i>
													<span data-i18n="Checkout">Checkout</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link mega-dropdown-link" href="help-center-landing.html">
													<i class='ti ti-circle me-1'></i>
													<span data-i18n="Help Center">Help Center</span>
												</a>
											</li>
										</ul>
						<li class="nav-item">
							<a class="nav-link fw-medium align-items-center" aria-current="page" href="">Portofolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-medium align-items-center" href="">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fw-medium align-items-center" aria-current="page" href="">Contact Us</a>
						</li>
				</div>

				</li>
				</ul>
			</div>
			<!-- <div class="landing-menu-overlay d-lg-none"></div> -->

			<!-- navbar button: Start -->
			<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
				<div class="navbar-nav flex-row align-items-center">
					<a class="btn btn-outline-dark" href="<?= base_url('auth/index') ?>" target="_blank">
						Login
					</a>
				</div>

				<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
					<div class="navbar-nav flex-row align-items-center" style="margin-left:5%; margin-right:200px;">
						<a class="btn btn-dark" href="<?= base_url('auth/register') ?>">
							Register
						</a>
					</div>
					<!-- navbar button: End -->
				</div>

		</nav>
		<!-- Navbar: End -->

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
