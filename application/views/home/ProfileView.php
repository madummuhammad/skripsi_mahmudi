<?php $this->load->view('home/hometemplate/HeaderView') ?>
<div class="content-wrapper">
	<div class="container">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="font-weight-600">
								VISI DAN MISI
							</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php echo $profile['visi'] ?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php echo $profile['misi'] ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 mt-4">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="font-weight-600">
								SEJARAH
							</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php echo $profile['sejarah'] ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('home/hometemplate/FooterView') ?>