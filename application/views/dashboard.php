<h4 class="fw-bold py-3 mb-4">Dashboard</h4>
<div class="content-wrapper">



	<div class="container-xxl flex-grow-1 container-p-y">


		<div class="row">
			<div class="col-sm-6 col-lg-3 mb-4">
				<div class="card card-border-shadow-success">
					<div class="card-body">
						<div class="d-flex align-items-center mb-2 pb-1">
							<div class="avatar me-2">
								<span class="avatar-initial rounded bg-label-success"><i class="ti ti-truck ti-md"></i></span>
							</div>
							<h4 class="ms-1 mb-0">80+</h4>
						</div>
						<p class="mb-1">Product</p>
						<p class="mb-0">
							<span class="fw-medium me-1">100%<span>
									<small class="text-muted">than last mounth</small>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 mb-4">
				<div class="card card-border-shadow-warning">
					<div class="card-body">
						<div class="d-flex align-items-center mb-2 pb-1">
							<div class="avatar me-2">
								<span class="avatar-initial rounded bg-label-warning"><i class='ti ti-alert-triangle ti-md'></i></span>
							</div>
							<h4 class="ms-1 mb-0">8</h4>
						</div>
						<p class="mb-1">Product on Going</p>
						<p class="mb-0">
							<span class="fw-medium me-1">-8.7%</span>
							<small class="text-muted">than last week</small>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 mb-4">
				<div class="card card-border-shadow-primary">
					<div class="card-body">
						<div class="d-flex align-items-center mb-2 pb-1">
							<div class="avatar me-2">
								<span class="avatar-initial rounded bg-label-primary"><i class='ti ti-git-fork ti-md'></i></span>
							</div>
							<h4 class="ms-1 mb-0">27</h4>
						</div>
						<p class="mb-1">Blog</p>
						<p class="mb-0">
							<span class="fw-medium me-1">+4.3%</span>
							<small class="text-muted">than last week</small>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 mb-4">
				<div class="card card-border-shadow-info">
					<div class="card-body">
						<div class="d-flex align-items-center mb-2 pb-1">
							<div class="avatar me-2">
								<span class="avatar-initial rounded bg-label-info"><i class='ti ti-license ti-md'></i></span>
							</div>
							<h4 class="ms-1 mb-0">13</h4>
						</div>
						<p class="mb-1">Flow</p>
						<p class="mb-0">
							<span class="fw-medium me-1">-2.5%</span>
							<small class="text-muted">than last week</small>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Kalender -->
			<div class="col-md-6 col-12 mb-4">
				<div id="calendar">
					<div id="calendar_header">
						<i class="fa fa-chevron-left"></i>
						<h1></h1>
						<i class="fa fa-chevron-right"></i>
					</div>
					<div id="calendar_weekdays"></div>
					<div id="calendar_content"></div>
				</div>
			</div>
			<!-- Chart -->
			<div class="col-md-6 col-12 mb-4">
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between">
						<div>
							<h5 class="card-title mb-0">Expense Ratio</h5>
							<small class="text-muted">Spending on various categories</small>
						</div>
						<div class="dropdown d-none d-sm-flex">
							<button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-calendar"></i></button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
								<li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
								<li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
								<li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
								<li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
							</ul>
						</div>
					</div>
					<div class="card-body">
						<div id="donutChart"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Timeline -->
			<div class="col-xl-6">
				<div class="card">
					<h5 class="card-header">Advanced</h5>
					<div class="card-body pb-0">
						<ul class="timeline pt-3">
							<li class="timeline-item pb-4 timeline-item-primary border-left-dashed">
								<span class="timeline-indicator-advanced timeline-indicator-primary">
									<i class="ti ti-send rounded-circle scaleX-n1-rtl"></i>
								</span>
								<div class="timeline-event">
									<div class="timeline-header border-bottom mb-3">
										<h6 class="mb-0">Project on Going</h6>
										<span class="text-muted">3 Oktober 2023</span>
									</div>
									<div class="d-flex justify-content-between flex-wrap mb-2">
										<div class="d-flex align-items-center">
											<span>Aplikasi SOP</span>
											<i class="ti ti-arrow-right scaleX-n1-rtl mx-3"></i>
											<span>Solusi Cipta Media Office</span>
										</div>
										<div>
											<span>6:30 AM</span>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<img src="<?= base_url("public") ?>/assets/img/icons/misc/pdf.png" alt="img" width="20" class="me-2">
										<span class="mb-0">bookingCard.pdf</span>
									</div>
								</div>
							</li>
							<li class="timeline-item pb-4 timeline-item-success border-left-dashed">
								<span class="timeline-indicator-advanced timeline-indicator-success">
									<i class="ti ti-brush rounded-circle scaleX-n1-rtl"></i>
								</span>
								<div class="timeline-event pb-3">
									<div class="timeline-header mb-sm-0 mb-3">
										<h6 class="mb-0">Design Review</h6>
										<span class="text-muted">4th October</span>
									</div>
									<p>
										Weekly review of freshly prepared design for our new
										application.
									</p>
									<div class="d-flex justify-content-between">
										<h6>New Application</h6>
										<div class="d-flex">
											<div class="avatar avatar-xs me-2">
												<img src="<?= base_url("public") ?>/assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
											</div>
											<div class="avatar avatar-xs">
												<img src="<?= base_url("public") ?>/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="timeline-item pb-4 timeline-item-danger border-left-dashed">
								<span class="timeline-indicator-advanced timeline-indicator-danger">
									<i class="ti ti-basket rounded-circle"></i>
								</span>
								<div class="timeline-event pb-3">
									<div class="d-flex flex-sm-row flex-column">
										<img src="<?= base_url("public") ?>/assets/img/elements/11.jpg" class="rounded me-3" alt="Shoe img" height="62" width="62" />
										<div>
											<div class="timeline-header flex-wrap mb-2 mt-3 mt-sm-0">
												<h6 class="mb-0">Aplikasi Tracer Study</h6>
												<span class="text-muted">65Oktober 2023</span>
											</div>
											<p>
												PUMA presents the latest shoes from its collection. Light &
												comfortable made with highly durable material.
											</p>
										</div>
									</div>
									<div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column text-center">
										<div class="mb-sm-0 mb-2">
											<p class="mb-0">Customer</p>
											<span class="text-muted">Azmi Askandar</span>
										</div>
										<div class="mb-sm-0 mb-2">
											<p class="mb-0">Price</p>
											<span class="text-muted">Rp. 5.000.000</span>
										</div>
										<div>
											<p class="mb-0">Quantity</p>
											<span class="text-muted">1</span>
										</div>
									</div>
								</div>
							</li>
							<li class="timeline-item pb-4 timeline-item-info border-left-dashed">
								<span class="timeline-indicator-advanced timeline-indicator-info">
									<i class="ti ti-user-circle rounded-circle"></i>
								</span>
								<div class="timeline-event pb-3">
									<div class="timeline-header">
										<h6 class="mb-0">Interview Schedule</h6>
										<span class="text-muted">6 Oktober 2023</span>
									</div>
									<p>
										Lorem ipsum, dolor sit amet consectetur adipisicing elit.
										Possimus quos, voluptates voluptas rem veniam expedita.
									</p>
									<hr />
									<div class="d-flex justify-content-between flex-wrap gap-2">
										<div class="d-flex flex-wrap">
											<div class="avatar me-3">
												<img src="<?= base_url("public") ?>/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
											</div>
											<div>
												<p class="mb-0">Ayrani</p>
												<span class="text-muted">Internship</span>
											</div>
										</div>
										<div class="d-flex flex-wrap align-items-center cursor-pointer">
											<i class="ti ti-brand-hipchat me-2"></i>
											<i class="ti ti-phone-call"></i>
										</div>
									</div>
								</div>
							</li>
							<li class="timeline-item pb-0 timeline-item-warning border-transparent">
								<span class="timeline-indicator-advanced timeline-indicator-warning">
									<i class="ti ti-bell rounded-circle"></i>
								</span>
								<div class="timeline-event pb-3">
									<div class="timeline-header">
										<h6 class="mb-0">2 Notifications</h6>
										<span class="text-muted">7 Oktober 2023</span>
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
											<div class="d-flex flex-wrap align-items-center">
												<ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 my-3 me-2">
													<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-xs pull-up">
														<img class="rounded-circle" src="<?= base_url("public") ?>/assets/img/avatars/5.png" alt="Avatar" />
													</li>
													<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-xs pull-up">
														<img class="rounded-circle" src="<?= base_url("public") ?>/assets/img/avatars/12.png" alt="Avatar" />
													</li>
													<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-xs pull-up">
														<img class="rounded-circle" src="<?= base_url("public") ?>/assets/img/avatars/6.png" alt="Avatar" />
													</li>
												</ul>
												<span>Commented on your post.</span>
											</div>
											<button class="btn btn-outline-primary btn-sm my-sm-0 my-3">
												View
											</button>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap pb-0 px-0">
											<div class="d-flex flex-sm-row flex-column align-items-center">
												<img src="<?= base_url("public") ?>/assets/img/avatars/4.png" class="rounded-circle me-3" alt="avatar" height="24" width="24" />
												<div class="user-info">
													<p class="my-0">Dwight repaid you</p>
													<span class="text-muted">30 minutes ago</span>
												</div>
											</div>
											<h5 class="mb-0">$20</h5>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card h-100">
					<div class="card-header d-flex justify-content-between">
						<div class="card-title mb-0">
							<h5 class="mb-0">Active Project</h5>
							<small class="text-muted">Average 72% Completed</small>
						</div>
						<div class="dropdown">
							<button class="btn p-0" type="button" id="activeProjects" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ti ti-dots-vertical ti-sm text-muted"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="activeProjects">
								<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
								<a class="dropdown-item" href="javascript:void(0);">Download</a>
								<a class="dropdown-item" href="javascript:void(0);">View All</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<ul class="p-0 m-0">
							<li class="mb-4 d-flex">
								<div class="d-flex w-50 align-items-center me-3">
									<img src="<?= base_url("public") ?>/assets/img/icons/brands/laravel-logo.png" alt="laravel-logo" class="me-3" width="35" />
									<div>
										<h6 class="mb-0">Laravel</h6>
										<small class="text-muted">eCommerce</small>
									</div>
								</div>
								<div class="d-flex flex-grow-1 align-items-center">
									<div class="progress w-100 me-3" style="height:8px;">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
									<span class="text-muted">54%</span>
								</div>
							</li>
							<li class="mb-4 d-flex">
								<div class="d-flex w-50 align-items-center me-3">
									<img src="<?= base_url("public") ?>/assets/img/icons/brands/figma-logo.png" alt="figma-logo" class="me-3" width="35" />
									<div>
										<h6 class="mb-0">Figma</h6>
										<small class="text-muted">App UI Kit</small>
									</div>
								</div>
								<div class="d-flex flex-grow-1 align-items-center">
									<div class="progress w-100 me-3" style="height:8px;">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
									<span class="text-muted">86%</span>
								</div>
							</li>
							<li class="mb-4 d-flex">
								<div class="d-flex w-50 align-items-center me-3">
									<img src="<?= base_url("public") ?>/assets/img/icons/brands/vue-logo.png" alt="vue-logo" class="me-3" width="35" />
									<div>
										<h6 class="mb-0">VueJs</h6>
										<small class="text-muted">Calendar App</small>
									</div>
								</div>
								<div class="d-flex flex-grow-1 align-items-center">
									<div class="progress w-100 me-3" style="height:8px;">
										<div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
									<span class="text-muted">90%</span>
								</div>
							</li>
							<li class="mb-4 d-flex">
								<div class="d-flex w-50 align-items-center me-3">
									<img src="<?= base_url("public") ?>/assets/img/icons/brands/react-logo.png" alt="react-logo" class="me-3" width="35" />
									<div>
										<h6 class="mb-0">React</h6>
										<small class="text-muted">Dashboard</small>
									</div>
								</div>
								<div class="d-flex flex-grow-1 align-items-center">
									<div class="progress w-100 me-3" style="height:8px;">
										<div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
									<span class="text-muted">37%</span>
								</div>
							</li>
							<li class="mb-4 d-flex">
								<div class="d-flex w-50 align-items-center me-3">
									<img src="<?= base_url("public") ?>/assets/img/icons/brands/bootstrap-logo.png" alt="bootstrap-logo" class="me-3" width="35" />
									<div>
										<h6 class="mb-0">Bootstrap</h6>
										<small class="text-muted">Website</small>
									</div>
								</div>
								<div class="d-flex flex-grow-1 align-items-center">
									<div class="progress w-100 me-3" style="height:8px;">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
									<span class="text-muted">22%</span>
								</div>
							</li>
							<li class="d-flex">
								<div class="d-flex w-50 align-items-center me-3">
									<img src="<?= base_url("public") ?>/assets/img/icons/brands/sketch-logo.png" alt="sketch-logo" class="me-3" width="35" />
									<div>
										<h6 class="mb-0">Sketch</h6>
										<small class="text-muted">Website Design</small>
									</div>
								</div>
								<div class="d-flex flex-grow-1 align-items-center">
									<div class="progress w-100 me-3" style="height:8px;">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
									<span class="text-muted">29%</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 10px">
			<div class="col-md-6 col-xl-4 mb-4">
				<div class="card h-100">
					<div class="card-header d-flex justify-content-between">
						<div class="card-title m-0 me-2">
							<h5 class="m-0 me-2">Transactions</h5>
							<small class="text-muted">Total 58 Transactions done in this Month</small>
						</div>
						<div class="dropdown">
							<button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ti ti-dots-vertical ti-sm text-muted"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
								<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
								<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
								<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<ul class="p-0 m-0">
							<li class="d-flex mb-3 pb-1 align-items-center">
								<div class="badge bg-label-primary me-3 rounded p-2">
									<i class="ti ti-wallet ti-sm"></i>
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Wallet</h6>
										<small class="text-muted d-block">Starbucks</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<h6 class="mb-0 text-danger">Rp. 50.000</h6>
									</div>
								</div>
							</li>
							<li class="d-flex mb-3 pb-1 align-items-center">
								<div class="badge bg-label-success rounded me-3 p-2">
									<i class="ti ti-browser-check ti-sm"></i>
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Bank Transfer</h6>
										<small class="text-muted d-block">Add Money</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<h6 class="mb-0 text-success">Rp. 5.000.000</h6>
									</div>
								</div>
							</li>
							<li class="d-flex mb-3 pb-1 align-items-center">
								<div class="badge bg-label-danger rounded me-3 p-2">
									<i class="ti ti-brand-paypal ti-sm"></i>
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Paypal</h6>
										<small class="text-muted d-block mb-1">Client Payment</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<h6 class="mb-0 text-success">Rp. 10.000</h6>
									</div>
								</div>
							</li>
							<li class="d-flex mb-3 pb-1 align-items-center">
								<div class="badge bg-label-secondary me-3 rounded p-2">
									<i class="ti ti-credit-card ti-sm"></i>
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Master Card</h6>
										<small class="text-muted d-block mb-1">Ordered iPhone 13</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<h6 class="mb-0 text-danger">Rp. 300.000</h6>
									</div>
								</div>
							</li>
							<li class="d-flex mb-3 pb-1 align-items-center">
								<div class="badge bg-label-info me-3 rounded p-2">
									<i class="ti ti-currency-dollar ti-sm"></i>
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Bank Transactions</h6>
										<small class="text-muted d-block mb-1">Refund</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<h6 class="mb-0 text-success">Rp. 550.000</h6>
									</div>
								</div>
							</li>
							<li class="d-flex mb-3 pb-1 align-items-center">
								<div class="badge bg-label-danger me-3 rounded p-2">
									<i class="ti ti-brand-paypal ti-sm"></i>
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Paypal</h6>
										<small class="text-muted d-block mb-1">Client Payment</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<h6 class="mb-0 text-success">Rp. 5.000.000</h6>
									</div>
								</div>
							</li>
							<li class="d-flex align-items-center">
								<div class="badge bg-label-success me-3 rounded p-2">
									<i class="ti ti-browser-check ti-sm"></i>
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Bank Transfer</h6>
										<small class="text-muted d-block mb-1">Pay Office Rent</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<h6 class="mb-0 text-danger">Rp. 1000.000</h6>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--/ Transactions -->

			<!-- Popular Product -->
			<div class="col-md-6 col-xl-4 mb-4">
				<div class="card h-100">
					<div class="card-header d-flex justify-content-between">
						<div class="card-title m-0 me-2">
							<h5 class="m-0 me-2">Popular Products</h5>
							<small class="text-muted">Total 10.4k Visitors</small>
						</div>
						<div class="dropdown">
							<button class="btn p-0" type="button" id="popularProduct" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ti ti-dots-vertical ti-sm text-muted"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
								<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
								<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
								<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<ul class="p-0 m-0">
							<li class="d-flex mb-4 pb-1">
								<div class="me-3">
									<img src="<?= base_url("public") ?>/assets/img/elements/image 4.png" alt="User" class="rounded" width="46">
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">DVD</h6>
										<small class="text-muted d-block">Item: #SCM-2023</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<p class="mb-0 fw-medium">Rp. 300.000</p>
									</div>
								</div>
							</li>
							<li class="d-flex mb-4 pb-1">
								<div class="me-3">
									<img src="<?= base_url("public") ?>/assets/img/elements/image 9.png" alt="User" class="rounded" width="46">
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Aplikasi HRIS</h6>
										<small class="text-muted d-block">Item: #SCM-2023</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<p class="mb-0 fw-medium">Rp. 5.000.000</p>
									</div>
								</div>
							</li>
							<li class="d-flex mb-4 pb-1">
								<div class="me-3">
									<img src="<?= base_url("public") ?>/assets/img/elements/image 110.png" alt="User" class="rounded" width="46">
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Aplikasi Absensi</h6>
										<small class="text-muted d-block">Item: SCM-2023</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<p class="mb-0 fw-medium">Rp. 5.000.000</p>
									</div>
								</div>
							</li>
							<li class="d-flex mb-4 pb-1">
								<div class="me-3">
									<img src="<?= base_url("public") ?>/assets/img/elements/image 114.png" alt="User" class="rounded" width="46">
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Aplikasi Arsip Surat</h6>
										<small class="text-muted d-block">Item: #SCM-2023</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<p class="mb-0 fw-medium">Rp. 5.000.000</p>
									</div>
								</div>
							</li>
							<li class="d-flex mb-4 pb-1">
								<div class="me-3">
									<img src="<?= base_url("public") ?>/assets/img/elements/image 117.png" alt="User" class="rounded" width="46">
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Aplikasi Tracer Study</h6>
										<small class="text-muted d-block">Item: #SCM-2023</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<p class="mb-0 fw-medium">Rp. 5.000.000</p>
									</div>
								</div>
							</li>
							<li class="d-flex">
								<div class="me-3">
									<img src="<?= base_url("public") ?>/assets/img/elements/image 2.png" alt="User" class="rounded" width="46">
								</div>
								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
									<div class="me-2">
										<h6 class="mb-0">Aplikasi Inventory Gudang</h6>
										<small class="text-muted d-block">Item: #SCM-2023</small>
									</div>
									<div class="user-progress d-flex align-items-center gap-1">
										<p class="mb-0 fw-medium">Rp. 5.000.000</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<h5 class="pb-1 mb-4">Lintasan</h5>
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
		</div>
	</div>
</div>
</div>


<!-- Script -->
<script src="<?= base_url("public") ?>/assets/js/my-calendar.js"></script>
