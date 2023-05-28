<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">DATA USER</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<a href="<?php echo base_url('admin/user/add') ?>" class="mb-3 btn btn-primary">TAMBAH USER +</a>
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Hak Akses</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($admin as $key => $value) {?>
									<tr>
										<td><?php echo $key+1 ?></td>
										<td><?php echo $value->username ?></td>
										<td><?php echo $value->password ?></td>
										<td>
											<a href="<?php echo base_url('admin/user/edit/').$value->id ?>" class="btn btn-secondary text-white">Edit</a>
											<button class="btn btn-danger text-white" data-toggle="modal" data-target="#hapus<?php echo $value->id ?>">Hapus</button>
											<div class="modal fade" id="hapus<?php echo $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<!-- <div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div> -->
														<div class="modal-body">
															<h3>Hapus data ini?</h3>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-dismiss="modal">BATAL</button>
															<a href="<?php echo base_url('admin/user/hapus/').$value->id ?>" class="btn btn-danger text-white">HAPUS</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('admin/dashboardtemplate/FooterView') ?>