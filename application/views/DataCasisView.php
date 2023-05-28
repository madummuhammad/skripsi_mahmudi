<?php $this->load->view('dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('dashboardtemplate/TopbarView') ?>
<?php $this->load->view('dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center">DATA CALON SISWA</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="white-box">
					<?php echo form_open_multipart('casis/data/update') ?>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-3 col-form-label">ID Calon Siswa</label>
						<div class="col-sm-6">
							<input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": SIS<?php echo $casis['id_casis'] ?>">
						</div>
					</div>
		<!-- 			<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-6">
							<input type="text" class="form-control  <?php if(form_error('nama_casis')){echo 'is-invalid';} ?>" id="inputPassword" name="nama_casis" value="<?php echo $casis['nama_casis'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('nama_casis') ?>
							</div>
						</div>
					</div> -->
					<div class="form-group row">
						<label for="gambar" class="col-sm-3 col-form-label"></label>
						<div class="col-2">
							<?php if($casis['gambar']==NULL): ?>
								<a target="_blank" id="targetgambar" href="<?php echo base_url('assets/images/default.jpg') ?>">
									<img class="img-fluid" id="gambar" src="<?php echo base_url('assets/images/default.jpg') ?>" alt="">
								</a>
							<?php endif ?>
							<?php if($casis['gambar']!==NULL): ?>
								<a target="_blank" id="targetgambar" href="<?php echo base_url('assets/images/').$casis['gambar'] ?>">
									<img class="img-fluid" id="gambar" src="<?php echo base_url('assets/images/').$casis['gambar'] ?>" alt="">
								</a>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="gambar_casis" class="col-sm-3 col-form-label">Gambar</label>
						<div class="col-sm-6">
							<input type="file" class="form-control <?php if(form_error('gambar')){echo 'is-invalid';} ?>" id="gambar_casis" name="gambar" value="<?php echo $casis['gambar'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('gambar') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">NIK</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('nik')){echo 'is-invalid';} ?>" id="inputPassword" name="nik" value="<?php echo $casis['nik'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('nik') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">TETALA</label>
						<div class="col-sm-6">					
							<div class="row">
								<div class="col-sm-6">
									<input type="text" class="form-control <?php if(form_error('tempat')){echo 'is-invalid';} ?>" id="inputPassword" name="tempat"  value="<?php echo $casis['tempat'] ?>">
									<div class="invalid-feedback">
										<?php echo form_error('tempat') ?>
									</div>
								</div>
								<div class="col-sm-6">
									<input type="date" class="form-control <?php if(form_error('tanggal_lahir')){echo 'is-invalid';} ?>" id="inputPassword" name="tanggal_lahir" value="<?php echo $casis['tanggal_lahir'] ?>">
									<div class="invalid-feedback">
										<?php echo form_error('tanggal_lahir') ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-6">
							<select name="jenis_kelamin" class="form-select <?php if(form_error('jenis_kelamin')){echo 'is-invalid';} ?>" id="">
								<option <?php if ($casis['jenis_kelamin']!=='Laki-laki' OR $casis['jenis_kelamin'] !=='Perempuan') {
									echo "selected";
								} ?> value="">Pilih</option>
								<option value="Laki-laki" <?php if($casis['jenis_kelamin']=='Laki-laki'){echo 'selected';} ?>>Laki-laki</option>
								<option value="Perempuan" <?php if($casis['jenis_kelamin']=='Perempuan'){echo 'selected';} ?>>Perempuan</option>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('jenis_kelamin') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Agama</label>
						<div class="col-sm-6">
							<select name="agama" class="form-select <?php if(form_error('agama')){echo 'is-invalid';} ?>" id="">
								<option <?php if ($casis['agama']!=='Laki-laki' OR $casis['agama'] !=='Perempuan') {
									echo "selected";
								} ?> value="">Pilih</option>
								<option value="Laki-laki" <?php if($casis['agama']=='Laki-laki'){echo 'selected';} ?>>Islam</option>
								<option value="Kristen" <?php if($casis['agama']=='Kristen'){echo 'selected';} ?>>Kristen</option>
								<option value="Katholik" <?php if($casis['agama']=='Katholik'){echo 'selected';} ?>>Katholik</option>
								<option value="Konghucu" <?php if($casis['agama']=='Konghucu'){echo 'selected';} ?>>Konghucu</option>
								<option value="Hindu" <?php if($casis['agama']=='Hindu'){echo 'selected';} ?>>Hindu</option>
								<option value="Budha" <?php if($casis['agama']=='Budha'){echo 'selected';} ?>>Budha</option>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('agama') ?>
							</div>
						</div>
					</div>
				<!-- 	<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-6">
							<textarea type="text" class="form-control <?php if(form_error('alamat')){echo 'is-invalid';} ?>" id="inputPassword" name="alamat" cols="30" rows="5" ><?php echo $casis['alamat'] ?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('alamat') ?>
							</div>
						</div>
					</div> -->
					<div class="form-group row">
						<div class="col-sm-3">
							<label for="inputPassword" class="col-sm-3 col-form-label">Alamat</label>
						</div>
						<div class="col-sm-2">
							<label for="inputPassword" class="col-sm-3 col-form-label">Kabupaten</label>
							<input type="text" name="kabupaten" class="form-control <?php if(form_error('kabupaten')){echo 'is-invalid';} ?>" value="<?php echo $casis['kabupaten'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('kabupaten') ?>
							</div>
						</div>
						<div class="col-sm-2">
							<label for="inputPassword" class="col-sm-3 col-form-label">Kecamatan</label>
							<input type="text" name="kecamatan" class="form-control <?php if(form_error('kecamatan')){echo 'is-invalid';} ?>" value="<?php echo $casis['kecamatan'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('kecamatan') ?>
							</div>
						</div>
						<div class="col-sm-2">
							<label for="inputPassword" class="col-sm-3 col-form-label">Desa</label>
							<input type="text" name="desa" class="form-control <?php if(form_error('desa')){echo 'is-invalid';} ?>" value="<?php echo $casis['desa'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('desa') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Jumlah Saudara</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('jumlah_saudara')){echo 'is-invalid';} ?>" id="inputPassword" name="jumlah_saudara"  value="<?php echo $casis['jumlah_saudara'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('jumlah_saudara') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">No. Telepon</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('no_telp')){echo 'is-invalid';} ?>" id="inputPassword" name="no_telp" value="<?php echo $casis['no_telp'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('no_telp') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nama Ayah</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('nama_ayah')){echo 'is-invalid';} ?>" id="inputPassword" name="nama_ayah" value="<?php echo $casis['nama_ayah'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('nama_ayah') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
						<div class="col-sm-6">
							<select name="pekerjaan_ayah" class="form-select <?php if(form_error('pekerjaan_ayah')){echo 'is-invalid';} ?>" id="">
								<option <?php if ($casis['pekerjaan_ayah']!=='Laki-laki' OR $casis['pekerjaan_ayah'] !=='Perempuan') {
									echo "selected";
								} ?> value="">Pilih</option>
								<option value="PNS" <?php if($casis['pekerjaan_ayah']=='PNS'){echo 'selected';} ?>>PNS</option>
								<option value="TNI/Polri" <?php if($casis['pekerjaan_ayah']=='TNI/Polri'){echo 'selected';} ?>>TNI/Polri</option>
								<option value="Pedagang" <?php if($casis['pekerjaan_ayah']=='Pedagang'){echo 'selected';} ?>>Pedagang</option>
								<option value="Petani" <?php if($casis['pekerjaan_ayah']=='Petani'){echo 'selected';} ?>>Petani</option>
								<option value="Nelayan" <?php if($casis['pekerjaan_ayah']=='Nelayan'){echo 'selected';} ?>>Nelayan</option>
								<option value="Rumah Tangga" <?php if($casis['pekerjaan_ayah']=='Rumah Tangga'){echo 'selected';} ?>>Rumah Tangga</option>
								<option value="Lain-lain" <?php if($casis['pekerjaan_ayah']=='Lain-lain'){echo 'selected';} ?>>Lain-lain</option>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('pekerjaan_ayah') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Ayah</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('penghasilan_ayah')){echo 'is-invalid';} ?>" id="inputPassword" name="penghasilan_ayah" value="<?php echo $casis['penghasilan_ayah'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('penghasilan_ayah') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nama Ibu</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('nama_ibu')){echo 'is-invalid';} ?>" id="inputPassword" name="nama_ibu" value="<?php echo $casis['nama_ibu'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('nama_ibu') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
						<div class="col-sm-6">
							<select name="pekerjaan_ibu" class="form-select <?php if(form_error('pekerjaan_ibu')){echo 'is-invalid';} ?>" id="">
								<option <?php if ($casis['pekerjaan_ibu']!=='Laki-laki' OR $casis['pekerjaan_ibu'] !=='Perempuan') {
									echo "selected";
								} ?> value="">Pilih</option>
								<option value="PNS" <?php if($casis['pekerjaan_ibu']=='PNS'){echo 'selected';} ?>>PNS</option>
								<option value="TNI/Polri" <?php if($casis['pekerjaan_ibu']=='TNI/Polri'){echo 'selected';} ?>>TNI/Polri</option>
								<option value="Pedagang" <?php if($casis['pekerjaan_ibu']=='Pedagang'){echo 'selected';} ?>>Pedagang</option>
								<option value="Petani" <?php if($casis['pekerjaan_ibu']=='Petani'){echo 'selected';} ?>>Petani</option>
								<option value="Nelayan" <?php if($casis['pekerjaan_ibu']=='Nelayan'){echo 'selected';} ?>>Nelayan</option>
								<option value="Rumah Tangga" <?php if($casis['pekerjaan_ibu']=='Rumah Tangga'){echo 'selected';} ?>>Rumah Tangga</option>
								<option value="Lain-lain" <?php if($casis['pekerjaan_ibu']=='Lain-lain'){echo 'selected';} ?>>Lain-lain</option>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('pekerjaan_ibu') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Ibu</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('penghasilan_ibu')){echo 'is-invalid';} ?>" id="inputPassword" name="penghasilan_ibu" value="<?php echo $casis['penghasilan_ibu'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('penghasilan_ibu') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">Nama Sekolah Asal</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('asal_sekolah')){echo 'is-invalid';} ?>" id="inputPassword" name="asal_sekolah" value="<?php echo $casis['asal_sekolah'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('asal_sekolah') ?>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Sekolah Asal</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('no_induk_asal_sekolah')){echo 'is-invalid';} ?>" id="inputPassword" name="no_induk_asal_sekolah" value="<?php echo $casis['no_induk_asal_sekolah'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('no_induk_asal_sekolah') ?>
							</div>
						</div>
					</div>
<!-- 					<div class="form-group row">
						<label for="inputPassword" class="col-sm-3 col-form-label">NISN Siswa</label>
						<div class="col-sm-6">
							<input type="text" class="form-control <?php if(form_error('nisn')){echo 'is-invalid';} ?>" id="inputPassword" name="nisn" value="<?php echo $casis['nisn'] ?>">
							<div class="invalid-feedback">
								<?php echo form_error('nisn') ?>
							</div>
						</div>
					</div> -->
					<div class="form-group d-flex justify-content-end">
						<a href="<?php echo base_url('casis/data/clear') ?>" class="btn btn-danger text-white me-2">BATAL</a>
						<button type="submit" class="btn btn-primary">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('dashboardtemplate/FooterView') ?>
<script>
	$('input[name="gambar"]').change(function(e) {
		var reader = new FileReader();
		reader.onload = function(e) {
			document.querySelector("#gambar").src = e.target.result;
			document.querySelector("#targetgambar").href = e.target.result;
		};
		reader.readAsDataURL(this.files[0]);
	});
</script>