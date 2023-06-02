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
	<div class="row">
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-xlg-12 col-md-12">
				<div class="card">
					<div class="card-body">
						<h3 class="fw-bold text-center">Data Calon Siswa</h3>
						<form class="form-horizontal form-material">
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">ID Pendaftaran</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center">PDF<?php echo $casis['id_casis'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nama</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['nama_casis'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">TETALA</label>
								<div class="col-9">
									<div class="row">
										<div class="col-6">
											<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['tempat'] ?></div>
										</div>
										<div class="col-6">
											<?php 
											$date=$casis['tanggal_lahir'];
											$explode=explode('-',$date);
											$d=$explode[2];
											$m=$explode[1];
											$y=$explode[0];
											$tanggal_lahir=$d.'-'.$m.'-'.$y;
											?>
											<div class="form-control px-2 d-flex align-items-center"><?php echo $tanggal_lahir ?></div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Alamat</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['desa'] ?>, <?php echo $casis['kecamatan'] ?>, <?php echo $casis['kabupaten'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Jenis Kelamin</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['jenis_kelamin'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">No Telepon</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['no_telp'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nama Ayah</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['nama_ayah'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nama Ibu</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['nama_ibu'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Sekolah Asal</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['asal_sekolah'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">NISN</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['pendaftaran']['nisn'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nilai Matematika</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['nilai']['matematika'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nilai Bahasa Indonesia</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['nilai']['bahasa_indonesia'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nilai Bahasa Inggris</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['nilai']['bahasa_inggris'] ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nilai IPA</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $casis['nilai']['ipa'] ?></div>
								</div>
							</div>
							<?php
							$rata_rata=($casis['nilai']['matematika']+$casis['nilai']['bahasa_indonesia']+$casis['nilai']['bahasa_inggris']+$casis['nilai']['ipa'])/4;
							?>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Nilai Rata-rata</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $rata_rata ?></div>
								</div>
							</div>
							<div class="form-group mb-1 row">
								<label for="inputPassword" class="col-3 col-form-label">Status</label>
								<div class="col-9">
									<div class="form-control px-2 d-flex align-items-center"><?php echo $_GET['kelas'] ?></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Column -->
		</div>
	</div>
	<?php $this->load->view('admin/dashboardtemplate/FooterView') ?>
	<script>
		
		window.print()
	</script>