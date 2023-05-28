<?php $this->load->view('home/hometemplate/HeaderView') ?>
<div class="content-wrapper">
  <div class="container">
    <div class="col-sm-12">
      <div class="card" data-aos="fade-up">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="font-weight-600 text-center">
                Pengumuman Hasil Seleksi Penerimaan Siswa Baru
              </h1>
              <h1 class="font-weight-600 mb-4 text-center">
                MTs Bustanul Arifin Tramok Kokop Bangkalan
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="white-box">
                <?php if(count($seleksi['unggulan'])>0 OR count($seleksi['reguler'])>0): ?>
                <?php if($status==true): ?>
                  <a href="<?php echo base_url('pengumuman/cetak') ?>" class="btn btn-primary mb-3">Cetak</a>
                <?php endif ?>
              <?php endif ?>
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
                  </tbody>
                </table>
              </div>
              <?php if(count($seleksi['unggulan'])>0 OR count($seleksi['reguler'])>0): ?>
              <?php if($status==true): ?>
                <p class="m-0 p-0 text-right">Bangkalan, <?php echo date('d/m/Y'); ?> </p>
                <p class="m-0 p-0 text-right">Bag. Kesiswaan</p>
                <p class="mt-5 text-right">Bahar, S.Pd</p>
              <?php endif ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  <?php $this->load->view('home/hometemplate/FooterView') ?>