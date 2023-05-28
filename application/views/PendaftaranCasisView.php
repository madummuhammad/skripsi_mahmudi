<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('dashboardtemplate/TopbarView') ?>
<?php $this->load->view('dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">PENDAFATARAN</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<?php if($this->session->flashdata('status')=='success'): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('message') ?>
							<a target="_blank" href="<?php echo $this->session->flashdata('link') ?>">Klik Link</a>
						</div>
					<?php endif ?>
					<?php echo form_open('casis/pendaftaran/update') ?>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-3 col-form-label">ID Pendaftaran</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": PDF<?php echo $pendaftaran['id_pendaftaran'] ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Pendaftaran</label>
						<div class="col-sm-9">
							<?php
							$explode=explode(" ", $pendaftaran['tgl_pendaftaran']);
							$date=explode("-",$explode[0]);
							?>
							<input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo $date[2].'-'.$date[1].'-'.$date[0] ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">ID Calon Siswa</label>
						<div class="col-sm-9">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">SIS</span>
								</div>
								<input type="text" class="form-control <?php if(form_error('id_casis')){echo 'is-invalid';} ?>" id="id_casis" name="id_casis" value="<?php echo $casis['id_casis'] ?>">
							</div>
							<input type="text" value="<?php echo $casis['id_casis_value'] ?>" id="id_casis_value" hidden>
							<div class="invalid-feedback">
								<?php echo form_error('id_casis') ?>
							</div>
						</div>
					</div>
					<div class="card border fw-bold">
						<div class="card-body">							
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nama Lengkap</label>
								<div class="col-sm-9">
									<div class="d-flex align-items-center">
										<span>: </span>
										<input type="text" class="form-control-plaintext fw-bold ms-2" id="nama_lengkap" value="<?php echo $casis['nama_casis'] ?>" readonly>
									</div>
									<input type="text" value="<?php echo $casis['nama_casis_value'] ?>" id="nama_lengkap_value" hidden>
								</div>
							</div>
				<!-- 			<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">NISN</label>
								<div class="col-sm-9">
									<div class="d-flex align-items-center">
										<span>: </span>
										<input type="text" class="form-control-plaintext fw-bold ms-2" id="nisn" readonly value="<?php echo $casis['nisn'] ?>">
									</div>
									<input type="text" value="<?php echo $casis['nisn_value'] ?>" id="nisn_value" hidden>
								</div>
							</div> -->
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">TETALA</label>
								<div class="col-sm-9">
									<div class="d-flex align-items-center">
										<span>: </span>
										<input type="text" class="form-control-plaintext fw-bold ms-2" id="tempat" readonly value="<?php echo $casis['tempat'].', '.$casis['tanggal_lahir'] ?>">
									</div>
									<input type="text" value="<?php echo $casis['tempat_value'] ?>" id="tempat_value" hidden>
									<input type="text" value="<?php echo $casis['tanggal_lahir_value'] ?>" id="tanggal_lahir_value" hidden>
									<div class="invalid-feedback">
										<?php echo form_error('nik') ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">NISN</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('nisn')){echo 'is-invalid';} ?>" id="id_casis" name="nisn" value="<?php echo $pendaftaran['nisn'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('nisn') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">No. SKHU</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('no_skhu')){echo 'is-invalid';} ?>" id="id_casis" name="no_skhu" value="<?php echo $pendaftaran['no_skhu'] ?>">
							<input type="text" value="<?php echo $casis['id_casis'] ?>" id="id_casis_value" hidden>
							<div class="invalid-feedback">
								<?php echo form_error('no_skhu') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">No. Ijazah</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('no_ijazah')){echo 'is-invalid';} ?>" id="id_casis" name="no_ijazah" value="<?php echo $pendaftaran['no_ijazah'] ?>">
							<input type="text" value="<?php echo $casis['id_casis'] ?>" id="id_casis_value" hidden>
							<div class="invalid-feedback">
								<?php echo form_error('no_ijazah') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">No. Akta</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('no_akta')){echo 'is-invalid';} ?>" id="id_casis" name="no_akta" value="<?php echo $pendaftaran['no_akta'] ?>">
							<input type="text" value="<?php echo $casis['id_casis'] ?>" id="id_casis_value" hidden>
							<div class="invalid-feedback">
								<?php echo form_error('no_akta') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">No. KK</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('no_kk')){echo 'is-invalid';} ?>" id="id_casis" name="no_kk" value="<?php echo $pendaftaran['no_kk'] ?>">
							<input type="text" value="<?php echo $casis['id_casis'] ?>" id="id_casis_value" hidden>
							<div class="invalid-feedback">
								<?php echo form_error('no_kk') ?>
							</div>
						</div>
					</div>
					<div class="form-group d-flex justify-content-end">
						<button type="submit" class="btn btn-danger text-white me-2">KEMBALI</button>
						<button type="submit" class="btn btn-primary">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('dashboardtemplate/FooterView') ?>
<script>
	// alert('asdf');
	$("#id_casis").on('keyup',function(){
		var nama_lengkap=$("#nama_lengkap_value").val();
		var nisn=$("#nisn_value").val();
		var tempat=$("#tempat_value").val();
		var tgl=$("#tanggal_lahir_value").val();
		var id_casis=$("#id_casis_value").val();
		var split_tgl=tgl.split('-');
		var tanggal_lahir=split_tgl[2]+'-'+split_tgl[1]+'-'+split_tgl[0];
		if($(this).val()==id_casis){
			$("#nama_lengkap").val(nama_lengkap);
			$("#nisn").val(nisn);
			$("#tempat").val(tempat+','+tanggal_lahir);
		} else {
			$("#nama_lengkap").val("");
			$("#nisn").val("");
			$("#tempat").val("");
		}
	})
</script>