<?php $this->load->view('home/hometemplate/HeaderView') ?>
<div class="content-wrapper">
	<div class="container">
		<div class="col-sm-12">
			<div class="card" data-aos="fade-up">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="font-weight-600 mb-4">
								Galeri
							</h1>
						</div>
					</div>
					<div class="row">
						<?php foreach ($berita as $key => $value): ?>
							<div class="col-lg-4 stretch-card">
								<div class="card shadow">
									<div class="card-body">
										<a target="_blank" href="<?php echo base_url('assets/berita/').$value->gambar?>">
											<img src="<?php echo base_url('assets/berita/').$value->gambar ?>" alt="banner" class="img-fluid"/>
										</a>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('home/hometemplate/FooterView') ?>