<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('dashboardtemplate/TopbarView') ?>
<?php $this->load->view('dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="page-breadcrumb bg-white">
			<div class="row align-items-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h4 class="page-title text-center">VISI DAN MISI</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<h3 class="box-title"><?php echo $profile['visi'] ?></h3>
					<h3 class="box-title mt-1"><?php echo $profile['misi'] ?></h3>
				</div>
			</div>
		</div>
		<div class="page-breadcrumb bg-white">
			<div class="row align-items-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p><?php echo $profile['sejarah'] ?></p>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('dashboardtemplate/FooterView') ?>