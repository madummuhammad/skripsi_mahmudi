<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">PROFIL SEKOLAH</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<?php echo form_open_multipart('admin/profile/edit/load') ?>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Visi</label>
						<div class="col-sm-9">
							<input type="text" name="id_profile" value="<?php echo $profile['id_profil'] ?>" hidden>
							<textarea type="text" cols="30" rows="10" class="<?php if(form_error('visi')){echo 'is-invalid';} ?>" id="visi" name="visi"><?php echo $profile['visi'] ?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('visi') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Misi</label>
						<div class="col-sm-9">
							<textarea type="text" cols="30" rows="10" class="<?php if(form_error('misi')){echo 'is-invalid';} ?>" id="misi" name="misi"><?php echo $profile['misi'] ?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('misi') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Sejarah</label>
						<div class="col-sm-9">
							<textarea type="text" cols="30" rows="10" class="<?php if(form_error('sejarah')){echo 'is-invalid';} ?>" id="sejarah" name="sejarah"><?php echo $profile['sejarah'] ?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('sejarah') ?>
							</div>
						</div>
					</div>
					<div class="form-group d-flex justify-content-end">
						<a href="<?php echo base_url('admin/profile') ?>" class="btn btn-danger text-white me-2">KEMBALI</a>
						<button type="submit" class="btn btn-primary">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('admin/dashboardtemplate/FooterView') ?>
<script>
	$(document).ready(function() {
		$('#visi').summernote(
			{height: 100}
			);
		$('#misi').summernote(
			{height: 150}
			);
		$('#sejarah').summernote(
			{height: 300}
			);
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>