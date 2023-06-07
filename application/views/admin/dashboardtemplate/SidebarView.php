
<aside class="left-sidebar" data-sidebarbg="skin6">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
					<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/dashboard') ?>"
							aria-expanded="false">
							<i class="far fa-clock" aria-hidden="true"></i>
							<span class="hide-menu">HALAMAN UTAMA</span>
						</a>
						</li>
				<?php if($this->session->userdata('admin')['hak_akses']=='Admin' OR $this->session->userdata('admin')['hak_akses']=='Panitia PSB'): ?>
				<li class="sidebar-item pt-2">
					<p class="ms-3 fs-4 p-1 mb-0 mt-0 waves-effect waves-dark text-muted">
						INPUT DATA
					</p>
					<?php if($this->session->userdata('admin')['hak_akses']=='Admin'): ?>
						<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/user') ?>"
							aria-expanded="false">
							<i class="far fa-clock" aria-hidden="true"></i>
							<span class="hide-menu">DATA USER</span>
						</a>
					<?php endif ?>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/berita') ?>"
						aria-expanded="false">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span class="hide-menu">DATA BERITA</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/kelas') ?>"
						aria-expanded="false">
						<i class="fa fa-table" aria-hidden="true"></i>
						<span class="hide-menu">DATA KELAS</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/profile') ?>"
						aria-expanded="false">
						<i class="fa fa-table" aria-hidden="true"></i>
						<span class="hide-menu">DATA PROFIL SEKOLAH</span>
					</a>
				</li>

				<!-- Batas -->
				<li class="sidebar-item pt-2">
					<p class="ms-3 fs-4 p-1 mb-0 mt-0 waves-effect waves-dark text-muted">
						OLAH DATA
					</p>
					<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/seleksi') ?>"
						aria-expanded="false">
						<i class="far fa-clock" aria-hidden="true"></i>
						<span class="hide-menu">SELEKSI</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/buat_laporan') ?>"
						aria-expanded="false">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span class="hide-menu">BUAT LAPORAN</span>
					</a>
				</li>

				<!-- Batas -->
			<?php endif ?>
			<li class="sidebar-item pt-2">
				<p class="ms-3 fs-4 p-1 mb-0 mt-0 waves-effect waves-dark text-muted">
					LAPORAN
				</p>
				<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/hasil_seleksi') ?>"
					aria-expanded="false">
					
					<span class="hide-menu">REKAPITULASI HASIL SELEKSI</span>
				</a>
				<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/rekap') ?>"
					aria-expanded="false">
					
					<span class="hide-menu">REKAPITULASI PENDAFTAR</span>
				</a>
			</li>
		</ul>

	</nav>
	<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
