<!-- Favicon -->
<link rel="shortcut icon" href="<?= base_url("public/assets/img/backgrounds/scm.png") ?>" type="image/x-icon">>

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
<script src="<?= base_url("public") ?>/assets/vendor/js/template-customizer.js"></script>
<!-- <script src="< base_url("public") ?>/assets/js/front-config.js"></script> -->

<!-- Navbar Start -->
<nav class="header">
	<div class="navbar navbar-expand-lg landing-navbar px-3 px-lg-4">
		<!-- Menu Logo Start -->
		<div class="navbar-brand app-brand d d-flex py-0 py-lg-2 me-4">
			<!-- Mobile Menu Toggle Start-->
			<button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="ti ti-menu-2 ti-sm align-middle"></i>
			</button>


			<a href="index" class="app-brand-link">
				<span class="app-brand-logo">
					<img src="<?= base_url("public/assets/img/backgrounds/scm.png") ?>" alt="logo" style="width:100px;height:30px;">
				</span>
			</a>
		</div>

		<div class="collapse navbar-collapse landing-nav-menu justify-content-between" id="navbarSupportedContent">
			<button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="ti ti-x ti-sm"></i>
			</button>
			<ul class="navbar-nav me-auto" style="margin: 20px!important;margin-left:45%!important;">
				<li class="nav-item">
					<a class="nav-link fw-medium align-items-center" aria-current="page" href="index">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-medium align-items-center" href="about_us">About Us</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Product
					</a>
					<ul class="dropdown-menu" style="height: 350px!important; margin:5px!important;padding:5px!important;gap:5px;">
						<li><a class="dropdown-item" href="prod_app">Aplikasi</a></li>
						<li><a class="dropdown-item" href="prod_blog">Blog</a></li>
						
							<hr class="dropdown-divider">
						
						<li><a class="dropdown-item" href="#">Lainnya</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-medium align-items-center" aria-current="page" href="portofolio">Portofolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-medium align-items-center" aria-current="page" href="contact_us">Contact Us</a>
				</li>
				<ul class="navbar-nav flex-row align-items-center ms-auto" style="width: 100px!important;">
					<!-- User -->
					<li class="nav-item navbar-dropdown dropdown-user dropdown">
						<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
							<div class="avatar avatar-online">
								<img src="<?= base_url("public") ?>/assets/img/avatars/hali1.jpg" alt class="h-auto rounded-circle" />
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<a class="dropdown-item" href="#">
									<div class="d-flex">
										<div class="flex-shrink-0 me-3">
											<div class="avatar avatar-online">
												<img src="<?= base_url("public") ?>/assets/img/avatars/hali1.jpg" alt="Profil" class="h-auto rounded-circle" />
											</div>
										</div>
										<div class="flex-grow-1">
											<span class="fw-semibold d-block"><?= $this->session->userdata('username'); ?></span>
											<small class="text-muted"><?= $this->session->userdata('role'); ?></small>
										</div>
									</div>
								</a>
							</li>
							<li>
								<div class="dropdown-divider"></div>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<i class="ti ti-user-check me-2 ti-sm"></i>
									<span class="align-middle">My Profile</span>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<i class="ti ti-settings me-2 ti-sm"></i>
									<span class="align-middle">Settings</span>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<span class="d-flex align-items-center align-middle">
										<i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
										<span class="flex-grow-1 align-middle">Billing</span>
										<span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
									</span>
								</a>
							</li>
							<li>
								<div class="dropdown-divider"></div>
							</li>
							<li>
								<a class="dropdown-item" href="<?= base_url("login/logout") ?>">
									<i class="ti ti-logout me-2 ti-sm"></i>
									<span class="align-middle">Log Out</span>
								</a>
							</li>
						</ul>
				</ul>
		</div>

		</li>
		</ul>
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