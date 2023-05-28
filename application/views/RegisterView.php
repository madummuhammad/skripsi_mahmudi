<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
<div class="page-wrapper login" style="height:100vh;">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-12">
				<div class="card">

					<?php echo form_open('registrasi'); ?>
					<div class="card-body">
						<div class="d-flex justify-content-center flex-column align-items-center">
							<img class="logo" src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
							<h3 class="text-center">Daftar Akun</h3>
						</div>
						<div class="mb-3">
							<input type="text" value="<?php echo set_value('nama_casis') ?>" class="form-control <?php if(form_error('nama_casis')){echo 'is-invalid';} ?>" placeholder="Nama Lengkap" name="nama_casis">
							<div class="invalid-feedback">
								<?php echo form_error('nama_casis') ?>
							</div>
						</div>
						<div class="mb-3">
							<input type="text" value="<?php echo set_value('email') ?>" class="form-control <?php if(form_error('email')){echo 'is-invalid';} ?>" placeholder="Email" name="email">
							<div class="invalid-feedback">
								<?php echo form_error('email') ?>
							</div>
						</div>
						<div class="mb-3">
							<input type="text" value="<?php echo set_value('username') ?>" class="form-control <?php if(form_error('username')){echo 'is-invalid';} ?>" placeholder="Username" name="username">
							<div class="invalid-feedback">
								<?php echo form_error('username') ?>
							</div>
						</div>
						<div class="mb-3">
							<input type="password" value="<?php echo set_value('password') ?>" class="form-control" placeholder="Password" name="password" <?php if(form_error('password')){echo 'is-invalid';} ?>>
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<button class="btn btn-primary" type="submit">Daftar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('dashboardtemplate/FooterView') ?>