<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
	<a href="#" class="app-brand-link">
	  	  <img src="<?= base_url("public/assets/img/backgrounds/scm.png")?>" alt="logo" style="width: 32px;height: 10.99px;flex-shrink: 0;">
      <span class="app-brand-text demo menu-text fw-bold" style="padding-left:11%;">Inventories</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
		<!--User-->
    <!-- Page -->
    <li class="menu-item" id="dashboard">
      <a href="#/dashboard" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Asset</span>

		<li class="menu-item">
      <a href="#/product" class="menu-link">
        <i class="menu-icon tf-icons fa fa-box-open"></i>
        <div data-i18n="Produk"  style="padding-left: 5px">Produk</div>
      </a>
    </li>
    
		<li class="menu-item">
      <a href="#/blog/index" class="menu-link">
        <i class="menu-icon tf-icons ti ti-news"></i>
        <div data-i18n="Blog">Blog</div>
      </a>
    </li>
		</li>

		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Projek</span>

		<li class="menu-item">
      <a href="#/flow" class="menu-link">
        <i class="menu-icon tf-icons ti ti-chart-bubble"></i>
        <div data-i18n="Flow">Flow</div>
      </a>
    </li>
		<li class="menu-item">
      <a href="#/data" class="menu-link">
        <i class="menu-icon tf-icons ti ti-license"></i>
        <div data-i18n="Data">Data</div>
      </a>
    </li>
		<li class="menu-item">
      <a href="#/contract" class="menu-link">
        <i class="menu-icon tf-icons fa fa-dumpster-fire"></i>
        <div data-i18n="Kontrak" style="padding-left: 5px">Kontrak</div>
      </a>
    </li>
		</li>

		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">User</span>

		<li class="menu-item">
      <a href="#/user" class="menu-link">
        <i class="menu-icon tf-icons ti ti-user"></i>
        <div data-i18n="User">User</div>
      </a>
    </li>
		
		<li class="menu-item">
      <a href="#/settings" class="menu-link">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Settings">Settings</div>
      </a>
    </li>
  </ul>
</aside>
