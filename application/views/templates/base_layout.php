<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url("public") ?>/assets/" data-template="vertical-menu-template-starter">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="description" content="" />
	<title>SCM Inventories</title>
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url("public") ?>/assets/img/favicon/favicon.ico" />
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
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url("assets/css/custom-styles.css") ?>" />
	<link rel="stylesheet" href="<?= base_url("assets/css/loading.css") ?>" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/node-waves/node-waves.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/typeahead-js/typeahead.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/fullcalendar/fullcalendar.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/flatpickr/flatpickr.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/select2/select2.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/quill/editor.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/apex-charts/apex-charts.css" />
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/libs/swiper/swiper.css" />



	<!-- Datatable CSS -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/typeahead-js/typeahead.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/flatpickr/flatpickr.css" />

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/animate-css/animate.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/sweetalert2/sweetalert2.css" />

	<!-- Row Group CSS -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
	<!-- Form Validation -->
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
	<!-- Page CSS -->
	<!-- Page CSS -->
	<link rel="stylesheet" href="<?= base_url("public")?>/assets/vendor/css/pages/cards-advance.css" />
	<link rel="stylesheet" href="<?= base_url("public") ?>/assets/vendor/css/pages/app-calendar.css" />

	<!-- Helpers -->
	<script src="<?= base_url("public") ?>/assets/vendor/js/helpers.js"></script>
	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
	<script src="<?= base_url("public") ?>/assets/vendor/js/template-customizer.js"></script>
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="<?= base_url("public") ?>/assets/js/config.js"></script>
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->
			<?php $this->load->view("templates/sidenav") ?>
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->
				<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
					<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
						<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
							<i class="ti ti-menu-2 ti-sm"></i>
						</a>
					</div>

					<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
						<div class="navbar-nav align-items-center">
							<a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
								<i class="ti ti-sm"></i>
							</a>
						</div>

						<ul class="navbar-nav flex-row align-items-center ms-auto">
							<!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="<?= base_url("public") ?>/assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li>
										<a class="dropdown-item" href="#">
											<div class="d-flex">
												<div class="flex-shrink-0 me-3">
													<div class="avatar avatar-online">
														<img src="<?= base_url("public") ?>/assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
													</div>
												</div>
												<div class="flex-grow-1">
													<span class="fw-semibold d-block">John Doe</span>
													<small class="text-muted">Admin</small>
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
										<a class="dropdown-item" href="<?= base_url("auth/logout") ?>">
											<i class="ti ti-logout me-2 ti-sm"></i>
											<span class="align-middle">Log Out</span>
										</a>
									</li>
								</ul>
							</li>
							<!--/ User -->
						</ul>
					</div>
				</nav>
				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->
					<div class="container-xxl flex-grow-1 container-p-y">
						<div id="content">
							<!-- <h4 class="fw-bold py-3 mb-4">Judul Halaman</h4> -->
						</div>
					</div>
					<!-- / Content -->

					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
						<div class="container-xxl">
							<div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
								<div>
									©
									<script>
										document.write(new Date().getFullYear());
									</script>
									, made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="fw-semibold">Pixinvent</a>
								</div>
								<div>
									<div>
										<a href="https://demos.pixinvent.com/vuexy-html-admin-template/" target="_blank" class="footer-link me-4">License</a>
										<a href="https://demos.pixinvent.com/vuexy-html-admin-template/" target="_blank" class="footer-link me-4">More Themes</a>
										<a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
										<a href="https://demos.pixinvent.com/vuexy-html-admin-template/" target="_blank" class="footer-link me-4">Support</a>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>

		<!-- Drag Target Area To SlideIn Menu On Small Screens -->
		<div class="drag-target"></div>
	</div>
	<!-- / Layout wrapper -->

	<!-- Vendor JS -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/jquery/jquery.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/node-waves/node-waves.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/hammer/hammer.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/i18n/i18n.js"></script>
	<script src="<?= base_url("public")?>/assets/vendor/libs/typeahead-js/typeahead.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/js/menu.js"></script>
	<script src="<?= base_url("public")?>/assets/vendor/libs/swiper/swiper.js"></script>

	<!-- Main JS -->
	<script src="<?= base_url("public") ?>/assets/js/main.js"></script>

	<!-- Datatable JS -->
	<script src="<?= base_url("public") ?>/assets/js/main.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

	<!-- Flat Picker -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/moment/moment.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/flatpickr/flatpickr.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/fullcalendar/fullcalendar.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/select2/select2.js"></script>

	<!-- Form Validation -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
	<script src="<?= base_url("public") ?>/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

	<!-- SweetAlert -->
	<script src="<?= base_url("public") ?>/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
	<script src="<?= base_url("public") ?>/assets/js/extended-ui-sweetalert2.js"></script>

	<!-- Page JS -->
	<script src="<?= base_url("public") ?>/assets/js/app-calendar-events.js"></script>
	<script src="<?= base_url("public") ?>/assets/js/app-calendar.js"></script>
	<script src="<?= base_url("public")?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>
	<script src="<?= base_url("public")?>/assets/js/cards-advance.js"></script>
	

	<script>
		const base_url = "<?= base_url() ?>"
	</script>
	<script src="<?= base_url("assets/js/jqueryhelper.js") ?>"></script>
	<script src="<?= base_url("assets/js/base_layout.js") ?>"></script>
</body>

</html>
