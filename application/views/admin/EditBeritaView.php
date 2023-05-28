<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">TAMBAH BERITA</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<?php echo form_open_multipart('admin/berita/edit/load') ?>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Judul Berita</label>
						<div class="col-sm-9">
							<input type="text" name="id_berita" value="<?php echo $berita['id_berita']; ?>" hidden>
							<input type="text" class="form-control  <?php if(form_error('judul')){echo 'is-invalid';} ?>" id="inputPassword" name="judul" value="<?php echo $berita['judul_berita'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('judul') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Isi</label>
						<div class="col-sm-9">
							<!-- 							<textarea name="" id="" cols="30" rows="10" id="summernote"></textarea> -->
							<textarea type="text" cols="30" rows="10" class="<?php if(form_error('isi')){echo 'is-invalid';} ?>" id="summernote" name="isi"><?php echo $berita['isi'] ?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('isi') ?>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<label for="inputPassword" class="col-sm-3 col-form-label">Gambar</label>
						<div class="col-4">
							<?php if($berita['gambar']==NULL){?>
								<img src="<?php echo base_url('assets/berkas/default.jpg') ?>" class="img-fluid" alt="">
							<?php }else{ ?>
								<img src="<?php echo base_url('assets/berita/').$berita['gambar'] ?>" class="img-fluid" alt="">
							<?php } ?>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-3"></div>
						<div class="col-sm-9">
							<input type="file" class="form-control"  name="gambar">
						</div>
					</div>
					<div class="form-group d-flex justify-content-end">
						<a href="<?php echo base_url('admin/berita') ?>" class="btn btn-danger text-white me-2">KEMBALI</a>
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
		$('#summernote').summernote(
			{height: 200}
			);
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>