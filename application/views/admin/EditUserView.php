<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">TAMBAH USER</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<?php echo form_open('admin/user/edit/load') ?>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" class="form-control  <?php if(form_error('nama')){echo 'is-invalid';} ?>" id="inputPassword" name="nama" value="<?php echo $admin['nama'] ?>">
							<input type="text" name="id" value="<?php echo $id ?>" hidden>
							<div class="invalid-feedback">
								<?php echo form_error('nama') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Username</label>
						<div class="col-sm-9">
							<input type="text" class="form-control  <?php if(form_error('username')){echo 'is-invalid';} ?>" id="inputPassword" name="username"  value="<?php echo $admin['username'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('username') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<input type="password" class="form-control <?php if(form_error('password')){echo 'is-invalid';} ?>" id="inputPassword" name="password" value="">
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Hak Akses</label>
						<div class="col-sm-9">
							<select class="form-select <?php if(form_error('hak_akses')){echo 'is-invalid';} ?>" name="hak_akses" id="">
								<option value="">Pilih hak akses</option>
								<option value="Admin" <?php if ($admin['hak_akses']=='Admin') {
									echo 'selected';
								} ?> >Admin</option>
								<option value="Panitia PSB" <?php if ($admin['hak_akses']=='Panitia PSB') {
									echo 'selected';
								} ?> >Panitia PSB</option>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('hak_akses') ?>
							</div>
						</div>
					</div>
					<div class="form-group d-flex justify-content-end">
						<a href="<?php echo base_url('admin/user') ?>" class="btn btn-danger text-white me-2">KEMBALI</a>
						<button type="submit" class="btn btn-primary">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('admin/dashboardtemplate/FooterView') ?>