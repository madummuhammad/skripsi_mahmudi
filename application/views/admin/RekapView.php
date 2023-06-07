<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">REKAPITULASI PENDAFTAR</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<div class="row">
						<div class="col-4">
							<form action="" method="POST">
								<label for="">Filter Kabupaten</label>
								<div class="input-group">
									<input type="text" name="kabupaten" class="form-control">
									<button class="btn btn-primary">CARI</button>
								</div>
							</form>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th>No</th>
									<th>ID Casis</th>
									<th>Nama</th>
									<th>Tetala</th>
									<th>Alamat</th>
									<th>Sekolah Asal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($casis as $key => $value) {?>
									<tr>
										<td><?php echo $key+1 ?></td>
										<td><?php echo $value->id_casis ?></td>
										<td><?php echo $value->nama_casis ?></td>
										<td><?php echo $value->tempat.','.' '.$value->tanggal_lahir ?></td>
										<td><?php echo $value->desa ?>, <?php echo $value->kecamatan ?>, <?php echo $value->kabupaten ?></td>
										<td><?php echo $value->asal_sekolah ?></td>
										<td>
											<a href="<?php echo base_url('admin/rekap/').$value->id_casis ?>" class="btn btn-primary">Detail</a>
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