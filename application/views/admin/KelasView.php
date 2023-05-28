<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">DAFTAR KELAS</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<a href="<?php echo base_url('admin/kelas/add') ?>" class="mb-3 btn btn-primary">TAMBAH KELAS +</a>
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th>ID Kelas</th>
									<th>Nama Kelas</th>
									<th>Kuota</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($kelas as $key => $value) {?>
									<tr>
										<td><?php echo $value->id_kelas ?></td>
										<td><?php echo $value->nama_kelas ?></td>
										<td><?php echo $value->kuota ?></td>
										<td>
											<a href="<?php echo base_url('admin/kelas/edit/').$value->id_kelas ?>" class="btn btn-secondary text-white">Edit</a>
											<button class="btn btn-danger text-white" data-toggle="modal" data-target="#hapus<?php echo $value->id_kelas ?>">Hapus</button>
											<div class="modal fade" id="hapus<?php echo $value->id_kelas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-body">
															<h3>Hapus data ini?</h3>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-dismiss="modal">BATAL</button>
															<a href="<?php echo base_url('admin/kelas/hapus/').$value->id_kelas ?>" class="btn btn-danger text-white">HAPUS</a>
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