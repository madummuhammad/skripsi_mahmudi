
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
	<nav class="navbar top-navbar navbar-expand-md navbar-dark">
		<div class="navbar-header" data-logobg="skin6">
			<a class="navbar-brand" href="<?php echo base_url('') ?>">
				<b class="logo-icon">
					<img src="<?php echo base_url('assets') ?>/images/logo.png" style="width: 30px;" alt="homepage" />
				</b>
				<span class="logo-text text-dark">
					<?php
					echo $this->session->userdata('admin')['username'];
					?>
				</span>
			</a>
			<a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
			href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
		</div>
		<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
			<ul class="navbar-nav w-100 d-flex align-items-center justify-content-between">
				<li>
					<a class="text-white">
						
					</a>
				</li>
				<li>
					<a class="text-white fs-6 text-uppercase">
						Penerimaan Siswa Baru
						MTs Bustanul Arifin
						Tramok Kokop Bangkalan
					</a>
				</li>
				<li>
					<a class="profile-pic" href="<?php echo base_url('admin/logout') ?>">
						<span class="text-white font-medium">Logout</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>