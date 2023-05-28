<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">TAMBAH KELAS</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<?php echo form_open_multipart('admin/kelas/add/load') ?>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nama Kelas</label>
						<div class="col-sm-9">
							<input type="text" class="form-control  <?php if(form_error('nama_kelas')){echo 'is-invalid';} ?>" id="inputPassword" name="nama_kelas" value="<?php echo set_value('nama_kelas') ?>">
							<div class="invalid-feedback">
								<?php echo form_error('nama_kelas') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Kuota</label>
						<div class="col-sm-9">
							<input type="text" class="form-control  <?php if(form_error('kuota')){echo 'is-invalid';} ?>" id="inputPassword" name="kuota" value="<?php echo set_value('kuota') ?>">
							<div class="invalid-feedback">
								<?php echo form_error('kuota') ?>
							</div>
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