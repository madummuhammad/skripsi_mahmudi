<?php $this->load->view('admin/dashboardtemplate/HeaderView'); ?>
<?php $this->load->view('admin/dashboardtemplate/TopbarView') ?>
<?php $this->load->view('admin/dashboardtemplate/SidebarView') ?>
<div class="page-wrapper">
	<div class="page-breadcrumb bg-white">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="page-title text-center text-uppercase"><?php echo $casis['nama_casis'] ?></h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<!-- Column -->
			<div class="col-lg-4 col-xlg-3 col-md-12">
				<div class="white-box">
					<div class="user-bg"> <img width="100%"  src="">
						<div class="overlay-box">
							<div class="user-content">
								<a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/').$casis['gambar'] ?>"
									class="thumb-lg" alt="img"></a>
									<h4 class="text-white mt-2"><?php echo $casis['nama_casis'] ?></h4>
									<h5 class="text-white mt-2"><?php echo $casis['email'] ?></h5>
								</div>
							</div>
						</div>
<!--                             <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>258</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>125</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>556</h1>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                    	<div class="card">
                    		<div class="card-body">
                    			<form class="form-horizontal form-material">
                    				<div class="form-group mb-4">
                    					<label class="col-md-12 p-0">Nama</label>
                    					<div class="col-md-12 border-bottom p-0">
                    						<input type="text" readonly placeholder="Johnathan Doe"
                    						class="form-control p-0 border-0" value="<?php echo $casis['nama_casis'] ?>"> </div>
                    					</div>
                    					<div class="form-group mb-4">
                    						<label for="example-email" class="col-md-12 p-0">NIK</label>
                    						<div class="col-md-12 border-bottom p-0">
                    							<input type="text" readonly placeholder="johnathan@admin.com"
                    							class="form-control p-0 border-0"  value="<?php echo $casis['nik'] ?>" name="example-email"
                    							id="example-email">
                    						</div>
                    					</div>
                    					<div class="form-group mb-4">
                    						<label for="example-email" class="col-md-12 p-0">Alamat</label>
                    						<div class="col-md-12 border-bottom p-0">
                    							<input type="text" readonly placeholder="johnathan@admin.com"
                    							class="form-control p-0 border-0"  value="<?php echo $casis['desa'].', '.$casis['kecamatan'].', '.$casis['kabupaten'] ?>" name="example-email"
                    							id="example-email">
                    						</div>
                    					</div>
                    					<div class="form-group mb-4">
                    						<label for="example-email" class="col-md-12 p-0">Jenis Kelamin</label>
                    						<div class="col-md-12 border-bottom p-0">
                    							<input type="text" readonly placeholder="johnathan@admin.com"
                    							class="form-control p-0 border-0"  value="<?php echo $casis['jenis_kelamin'] ?>" name="example-email"
                    							id="example-email">
                    						</div>
                    					</div>
                    					<div class="form-group mb-4">
                    						<label for="example-email" class="col-md-12 p-0">Telepon</label>
                    						<div class="col-md-12 border-bottom p-0">
                    							<input type="text" readonly placeholder="johnathan@admin.com"
                    							class="form-control p-0 border-0"  value="<?php echo $casis['no_telp'] ?>" name="example-email"
                    							id="example-email">
                    						</div>
                    					</div>
                    					<div class="form-group mb-4">
                    						<label for="example-email" class="col-md-12 p-0">Nama Ayah</label>
                    						<div class="col-md-12 border-bottom p-0">
                    							<input type="text" readonly placeholder="johnathan@admin.com"
                    							class="form-control p-0 border-0"  value="<?php echo $casis['nama_ayah'] ?>" name="example-email"
                    							id="example-email">
                    						</div>
                    					</div>
                    					<div class="form-group mb-4">
                    						<label for="example-email" class="col-md-12 p-0">Nama Ibu</label>
                    						<div class="col-md-12 border-bottom p-0">
                    							<input type="text" readonly placeholder="johnathan@admin.com"
                    							class="form-control p-0 border-0"  value="<?php echo $casis['nama_ibu'] ?>" name="example-email"
                    							id="example-email">
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