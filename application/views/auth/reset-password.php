<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url("public") ?>/assets/" data-template="vertical-menu-template">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Reset Password - Pages | SCM Inventories</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url("public/assets/img/backgrounds/scm.png") ?>" type="image/x-icon">>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

	<!-- Icons -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/fonts/fontawesome.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/fonts/tabler-icons.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/fonts/flag-icons.css" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/css/demo.css" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/node-waves/node-waves.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/typeahead-js/typeahead.css" />
	<!-- Vendor -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

	<!-- Page CSS -->
	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/css/pages/page-auth.css" />
	<!-- Helpers -->
	<script src="<?= base_url("public") ?>/assets/vendor/js/helpers.js"></script>

	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
	<script src="<?= base_url("public") ?>/assets/vendor/js/template-customizer.js"></script>
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="<?= base_url("public") ?>/assets/js/config.js"></script>
</head>

<body>
	<!-- Content -->

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner py-4">
				<!-- Reset Password -->
				<div class="card">
					<div class="card-body">
						<!-- Logo -->
						<div class="app-brand justify-content-center mb-4 mt-2">
							<a href="index.html" class="app-brand-link gap-2">
								<span class="app-brand-logo demo">
									<img src="<?= base_url("public/assets/img/avatars/landscape-logo.png") ?>" alt="logo" style="height:33px; width:33px">
								</span>
								<span class="app-brand-text demo text-body fw-bold ms-1">SCM SHOP</span>
							</a>
						</div>
						<!-- /Logo -->
						<h4 class="mb-1 pt-2">Atur Ulang Password 🔒</h4>
						<p class="mb-4">for <span class="fw-bold">email@email.com</span></p>
						<form id="formAuthentication" action="index" method="POST">
							<div class="mb-3 form-password-toggle">
								<label class="form-label" for="password">Password Baru</label>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
									<span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
								</div>
							</div>
							<div class="mb-3 form-password-toggle">
								<label class="form-label" for="confirm-password">Konfirmasi Password</label>
								<div class="input-group input-group-merge">
									<input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
									<span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
								</div>
							</div>
							<button class="btn btn-primary d-grid w-100 mb-3">Simpan</button>
							<div class="text-center">
								<a href="index">
									<i class="ti ti-chevron-left scaleX-n1-rtl"></i>
									Kembali ke Login
								</a>
							</div>
						</form>
					</div>
				</div>
				<!-- /Reset Password -->
			</div>
		</div>
	</div>

	<!-- / Content -->

	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/jquery/jquery.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/node-waves/node-waves.js"></script>

	<script src="<?= base_url("public") ?>/assets/vendor/libs/hammer/hammer.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/i18n/i18n.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/typeahead-js/typeahead.js"></script>

	<script src="<?= base_url("public") ?>/assets/vendor/js/menu.js"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

	<!-- Main JS -->
	<script src="<?= base_url("public") ?>/assets/js/main.js"></script>

	<!-- Page JS -->
	<script src="<?= base_url("public") ?>/assets/js/pages-auth.js"></script>
</body>

</html>
