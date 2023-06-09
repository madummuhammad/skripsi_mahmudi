<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<style>
	.tanggal{
		position: absolute;
		z-index: 1000;
		bottom: 0;
		left: 20px;
	}
</style>
<div class="tanggal">
	<?php echo date('d/m/Y') ?>
</div>
<div class="page-wrapper">
	<div class="row d-flex align-items-center">
		<div class="col-2">
			<img class="img-fluid" src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
		</div>
		<div class="col-10">
			<h4 class="text-start fw-bold">MTs BUSTANUL ARIFIN TRAMOK KOKOP BANGKALAN</h4 >
			<h4 class="text-start fw-bold m-0">Tahun Ajaran 2023-2024</h4 >
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-2">
					
				</div>
				<div class="col-10 text-start">
					<div class="fw-bold">
						Kantor: Jln. KH. Moh. Fahri Luk Guluk Tramok Kokop Bangkalan
					</div>
				</div>
			</div>
			<div style="border-top:3px solid black;font-style: italic;" class="text-center fs-5 fw-bold ">
			</div>
		</div>
	</div>
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">LAPORAN HASIL SELEKSI</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<form action="<?php echo base_url('admin/hasil_seleksi/load') ?>" method="POST">
						<div class="table-responsive">
							<table class="table">
								<thead class="thead-dark">
									<tr>
										<th>ID Pendaftaran</th>
										<th>Nama</th>
										<th>Asal Sekolah</th>
										<th>Nilai Rata-rata</th>
										<th>Berkas</th>
										<th>Status</th>
									</tr>
								</thead>
							<tbody>
								<?php foreach ($seleksi['unggulan'] as $key => $value): ?>
									<?php if($key<=4): ?>
										<input type="text" name="id_pendaftaran<?php echo $value->id_pendaftaran ?>" hidden>
										<tr>
											<td><?php echo $value->id_pendaftaran ?></td>
											<td><?php echo $value->casis['nama_casis'] ?></td>
											<td><?php echo $value->casis['asal_sekolah'] ?></td>
											<td><?php echo $value->rerata_nilai ?></td>
											<td>Lengkap</td>
											<td><?php echo $value->kelas ?></td>
										</tr>
									<?php endif ?>
								<?php endforeach ?>
								<?php foreach ($seleksi['reguler'] as $key => $value): ?>
									<?php if($key<=4): ?>
										<input type="text" name="id_pendaftaran<?php echo $value->id_pendaftaran ?>" hidden>
										<tr>
											<td><?php echo $value->id_pendaftaran ?></td>
											<td><?php echo $value->casis['nama_casis'] ?></td>
											<td><?php echo $value->casis['asal_sekolah'] ?></td>
											<td><?php echo $value->rerata_nilai ?></td>
											<td>Lengkap</td>
											<td><?php echo $value->kelas ?></td>
										</tr>
									<?php endif ?>
								<?php endforeach ?>
								<?php foreach ($seleksi['tidak_diterima1'] as $key => $value): ?>
									<?php if($key<=4): ?>
										<input type="text" name="id_pendaftaran<?php echo $value->id_pendaftaran ?>" hidden>
										<tr>
											<td><?php echo $value->id_pendaftaran ?></td>
											<td><?php echo $value->casis['nama_casis'] ?></td>
											<td><?php echo $value->casis['asal_sekolah'] ?></td>
											<td><?php echo $value->rerata_nilai ?></td>
											<td>Lengkap</td>
											<td>Tidak Diterima</td>
										</tr>
									<?php endif ?>
								<?php endforeach ?>
								<?php foreach ($seleksi['tidak_diterima2'] as $key => $value): ?>
									<?php if($key>4): ?>
										<input type="text" name="id_pendaftaran<?php echo $value->id_pendaftaran ?>" hidden>
										<tr>
											<td><?php echo $value->id_pendaftaran ?></td>
											<td><?php echo $value->casis['nama_casis'] ?></td>
											<td><?php echo $value->casis['asal_sekolah'] ?></td>
											<td><?php echo $value->rerata_nilai ?></td>
											<td>Lengkap</td>
											<td>Tidak Diterima</td>
										</tr>
									<?php endif ?>
								<?php endforeach ?>
								<?php foreach ($seleksi['tidak_diterima3'] as $key => $value): ?>
									<input type="text" name="id_pendaftaran<?php echo $value->id_pendaftaran ?>" hidden>
									<tr>
										<td><?php echo $value->id_pendaftaran ?></td>
										<td><?php echo $value->casis['nama_casis'] ?></td>
										<td><?php echo $value->casis['asal_sekolah'] ?></td>
										<td><?php echo $value->rerata_nilai ?></td>
										<td>Lengkap</td>
										<td>Tidak Diterima</td>
									</tr>
								<?php endforeach ?>
								<?php foreach ($seleksi['tidak_diterima4'] as $key => $value): ?>
									<input type="text" name="id_pendaftaran<?php echo $value->id_pendaftaran ?>" hidden>
									<tr>
										<td><?php echo $value->id_pendaftaran ?></td>
										<td><?php echo $value->casis['nama_casis'] ?></td>
										<td><?php echo $value->casis['asal_sekolah'] ?></td>
										<td><?php echo $value->rerata_nilai ?></td>
										<td>Berkas Tidak Lengkap</td>
										<td>Tidak Diterima</td>
									</tr>
								<?php endforeach ?>
							</tbody>
							</table>
							<div class="form-group d-flex justify-content-end">
								<!-- <a href="<?php echo base_url('admin/berita') ?>" class="btn btn-danger text-white me-2">KEMBALI</a> -->
								<!-- <button type="button" class="btn btn-primary">Kembali</button> -->
								<?php if($this->session->userdata('admin')['hak_akses']=='Kesiswaan'): ?>
									<?php if(count($seleksi['unggulan'])>0 OR count($seleksi['reguler'])>0): ?>
									<?php if($status==false): ?>
										<button type="submit" class="btn btn-primary">SETUJUI LAPORAN</button>
									<?php endif ?>
								<?php endif ?>
							<?php endif ?>
						</div>
					</div>
				</form>
				<?php if(count($seleksi['unggulan'])>0 OR count($seleksi['reguler'])>0): ?>
				<?php if($status==true): ?>
					<p class="m-0 p-0 text-end">Bangkalan, <?php echo date('d/m/Y'); ?> </p>
					<p class="m-0 p-0 text-end">Bag. Kesiswaan</p>
					<p class="mt-5 text-end">Bahar, S.Pd</p>
				<?php endif ?>
			<?php endif ?>
		</div>
	</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<script>
	window.print();
</script>
<?php $this->load->view('admin/dashboardtemplate/FooterView') ?>