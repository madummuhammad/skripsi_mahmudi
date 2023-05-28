<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
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
<div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-2">
			<img class="img-fluid" src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
		</div>
		<div class="col-10">
			<h4 class="text-start fw-bold">PENERIMAAN SISWA BARU</h4 >
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
	<div class="row">
		<div class="col-12">
			<h4 class="text-center fw-bold mt-3">BUKTI PENDAFTARAN</h4>
			<p>Atas nama dibawah ini:</p>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-8">
					<p>Nama: <?php echo $casis['nama_casis'] ?></p>
					<p>ID Pendaftaran: PDF<?php echo $pendaftaran['id_pendaftaran'] ?></p>
				</div>
				<div class="col-2"></div>
			</div>		
			<p>Sudah melakukan pendaftaran di MTs Bustanul Arifin Tramuk Kokop Kab. Bangkalan pada tanggal <?php echo $pendaftaran['tgl_pendaftaran'] ?></p>
		</div>
	</div>
	<div class="row">
		<p class="fw-bold text-end">TTD</p>
		<p class="fw-bold text-end mt-5">Maisaroh, S.Pd</p>
	</div>
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<script>
	window.print();
</script>
<?php $this->load->view('dashboardtemplate/FooterView') ?>