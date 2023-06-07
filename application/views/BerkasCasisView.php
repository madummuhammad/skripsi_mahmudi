<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('dashboardtemplate/TopbarView') ?>
<?php $this->load->view('dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">DATA BERKAS</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<form action="<?php echo base_url('casis/berkas/update') ?>" method="POST" enctype="multipart/form-data">
						<?php foreach ($berkas as $key => $value) {?>
							<div class="row mb-2">
								<label for="inputPassword" class="col-sm-3 col-form-label"><?php echo $value->nama_berkas; ?></label>
								<div class="col-4">
									<?php if($value->gambar==NULL){?>
										<a target="_blank" id="target<?php echo implode("_",explode(" ", trim(strtolower($value->nama_berkas)))) ?>" href="<?php echo base_url('assets/images/default.jpg') ?>">
											<img id="<?php echo implode("_",explode(" ", trim(strtolower($value->nama_berkas)))) ?>" src="<?php echo base_url('assets/images/default.jpg') ?>" style="width: 100px;" alt="">
										</a>
									<?php }else{ ?>
										<a target="_blank" id="target<?php echo implode("_",explode(" ", trim(strtolower($value->nama_berkas)))) ?>" href="<?php echo base_url('assets/berkas/').$value->gambar ?>">
											<img id="<?php echo implode("_",explode(" ", trim(strtolower($value->nama_berkas)))) ?>" src="<?php echo base_url('assets/berkas/').$value->gambar ?>" style="width: 100px;" alt="">
										</a>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-3"></div>
								<div class="col-sm-9">
									<input type="file" class="form-control"  name="<?php echo implode("_",explode(" ", trim(strtolower($value->nama_berkas)))) ?>">
								</div>
							</div>
						<?php } ?>
						<div class="form-group row">
							<div class="col-3"></div>
							<div class="col-sm-9">
								<div class="alert alert-warning" role="alert">
									Silahkan lengkapi berkas! Karena jika tidak lengkap, otomatis tidak bisa diproses selanjutnya dan tidak lulus
								</div>
							</div>
						</div>
						<div class="form-group d-flex justify-content-end">
							<a href="<?php echo base_url('casis/berkas/clear') ?>" class="btn btn-danger text-white me-2">BATAL</a>
							<button type="submit" class="btn btn-primary">SIMPAN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('dashboardtemplate/FooterView') ?>
	<script>
		$('input[name="ijazah"]').change(function(e) {
			var reader = new FileReader();
			reader.onload = function(e) {
				document.querySelector("#ijazah").src = e.target.result;
				document.querySelector("#targetijazah").href = e.target.result;
			};
			reader.readAsDataURL(this.files[0]);
		});
		$('input[name="skhu"]').change(function(e) {
			var reader = new FileReader();
			reader.onload = function(e) {
				document.querySelector("#skhu").src = e.target.result;
			};
			reader.readAsDataURL(this.files[0]);
		});
		$('input[name="akta"]').change(function(e) {
			var reader = new FileReader();
			reader.onload = function(e) {
				document.querySelector("#akta").src = e.target.result;
			};
			reader.readAsDataURL(this.files[0]);
		});
		$('input[name="kartu_keluarga"]').change(function(e) {
			var reader = new FileReader();
			reader.onload = function(e) {
				document.querySelector("#kartu_keluarga").src = e.target.result;
			};
			reader.readAsDataURL(this.files[0]);
		});
	</script>