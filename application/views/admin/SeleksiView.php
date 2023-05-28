<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">SELEKSI BERKAS</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<div class="white-box">
						<div class="row">
							<div class="col-6">
								<label for="">Id Pendaftaran</label>
								<form class="d-flex" action="<?php echo base_url('admin/seleksi') ?>" method="POST">
									<select class="form-select" name="id_pendaftaran" id="">
										<option value="">Pilih id pendaftaran</option>
										<?php foreach ($pendaftaran as $key => $value): ?>
											<option value="<?php echo $value->id_pendaftaran ?>"><?php echo $value->id_pendaftaran ?></option>
										<?php endforeach ?>
									</select>
									<button class="btn btn-primary">Cari</button>
								</form>
							</div>
						</div>
						<form action="<?php echo base_url('admin/seleksi/load') ?>" method="POST">
							<div class="table-responsive">
								<table class="table">
									<thead class="thead-dark">
										<tr>
											<th>ID Pendaftaran</th>
											<th>Nama</th>
											<th>Asal Sekolah</th>
											<th>SKHU</th>
											<th>IJAZAH</th>
											<th>KK</th>
											<th>AKTA</th>
											<th>BERKAS</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($filter as $key => $value): ?>
											<?php if($value->status==FALSE): ?>
												<tr>
													<td><?php echo $value->id_pendaftaran ?></td>
													<td><?php echo $value->casis['nama_casis'] ?></td>
													<td><?php echo $value->casis['asal_sekolah'] ?></td>
													<td>
														<?php if($value->skhu==NULL): ?>
															<a href="<?php echo base_url('assets/images/default.jpg') ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/images/default.jpg') ?>" alt="">
															</a>
														<?php else: ?>
															<a href="<?php echo base_url('assets/berkas/').$value->skhu ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/berkas/').$value->skhu ?>" alt="">
															</a>
														<?php endif ?>
													</td>
													<td>
														<?php if($value->ijazah==NULL): ?>
															<a href="<?php echo base_url('assets/images/default.jpg') ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/images/default.jpg') ?>" alt="">
															</a>
														<?php else: ?>
															<a href="<?php echo base_url('assets/berkas/').$value->ijazah ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/berkas/').$value->ijazah ?>" alt="">
															</a>
														<?php endif ?>
													</td>
													<td>
														<?php if($value->kk==NULL): ?>
															<a href="<?php echo base_url('assets/images/default.jpg') ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/images/default.jpg') ?>" alt="">
															</a>
														<?php else: ?>
															<a href="<?php echo base_url('assets/berkas/').$value->kk ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/berkas/').$value->kk ?>" alt="">
															</a>
														<?php endif ?>
													</td>
													<td>
														<?php if($value->akta==NULL): ?>
															<a href="<?php echo base_url('assets/images/default.jpg') ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/images/default.jpg') ?>" alt="">
															</a>
														<?php else: ?>
															<a href="<?php echo base_url('assets/berkas/').$value->akta ?>" target="_blank">
																<img style="width:120px; height: 200px; object-fit: cover; object-position: center;" src="<?php echo base_url('assets/berkas/').$value->akta ?>" alt="">
															</a>
														<?php endif ?>
														</td>
														<td>
															<div class="form-check">
																<label for="" class="form-check-label">Lengkap</label>
																<input type="radio" name="kelengkapan<?php echo $value->id_pendaftaran ?>" <?php if($value->berkas_diterima==true){
																	echo 'checked';
																} ?> class="form-check-input" value="Lengkap">
															</div>
															<div class="form-check">
																<label for="" class="form-check-label">Tidak Lengkap</label>
																<input type="radio" name="kelengkapan<?php echo $value->id_pendaftaran?>" <?php if($value->berkas_diterima==false){
																	echo 'checked';
																} ?>  class="form-check-input" value="Tidak Lengkap">
															</div>
														</td>
													</tr>
												<?php endif ?>
											<?php endforeach ?>
										</tbody>
									</table>
									<div class="form-group d-flex justify-content-end">
										<!-- <a href="<?php echo base_url('admin/berita') ?>" class="btn btn-danger text-white me-2">KEMBALI</a> -->
										<button type="submit" class="btn btn-primary">SIMPAN</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('admin/dashboardtemplate/FooterView') ?>