<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('dashboardtemplate/TopbarView') ?>
<?php $this->load->view('dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">DATA NILAI PELAJARAN</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<?php echo form_open('casis/nilai/update') ?>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nilai Matematika</label>
						<div class="col-sm-9">
							<input type="text" name="id_nilai" value="<?php echo $nilai['id_nilai'] ?>" hidden>
							<input type="text" class="form-control  <?php if(form_error('matematika')){echo 'is-invalid';} ?>" id="inputPassword" name="matematika" value="<?php echo $nilai['matematika'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('matematika') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nilai Bahasa Indonesia</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('bahasa_indonesia')){echo 'is-invalid';} ?>" id="inputPassword" name="bahasa_indonesia" value="<?php echo $nilai['bahasa_indonesia'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('bahasa_indonesia') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nilai IPA</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('ipa')){echo 'is-invalid';} ?>" id="inputPassword" name="ipa"  value="<?php echo $nilai['ipa'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('ipa') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Bahasa Inggris</label>
						<div class="col-sm-9">
							<input type="text" class="form-control <?php if(form_error('bahasa_inggris')){echo 'is-invalid';} ?>" id="inputPassword" name="bahasa_inggris" value="<?php echo $nilai['bahasa_inggris'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('bahasa_inggris') ?>
							</div>
						</div>
					</div>
					<div class="form-group d-flex justify-content-end">
						<a href="<?php echo base_url('casis/nilai/clear/').$nilai['id_nilai'] ?>" class="btn btn-danger text-white me-2">KEMBALI</a>
						<button type="submit" class="btn btn-primary">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('dashboardtemplate/FooterView') ?>