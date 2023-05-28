<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
<div class="page-wrapper login" style="height:100vh;">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-12">
				<?php echo form_open('load/login') ?>					
				<div class="card">
					<div class="card-body">
						<div class="d-flex justify-content-center flex-column align-items-center">
							<img class="logo" src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
							<h3 class="text-center">Silahkan Login</h3>
						</div>
						<?php if($this->session->userdata('login_status')){ ?>
							<div class="alert alert-danger" role="alert">
								Login gagal. Periksa username dan password!!
							</div>
						<?php } ?>
						<div class="mb-3">
							<input type="text"  value="<?php echo set_value('username') ?>" class="form-control <?php if(form_error('username')){echo 'is-invalid';} ?>" placeholder="Username" name="username">
							<div class="invalid-feedback">
								<?php echo form_error('username') ?>
							</div>
						</div>
						<div class="mb-3">
							<input type="password"  value="<?php echo set_value('password') ?>" class="form-control <?php if(form_error('password')){echo 'is-invalid';} ?>" placeholder="Password" name="password">
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<button class="btn btn-primary">Login</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('dashboardtemplate/FooterView') ?>