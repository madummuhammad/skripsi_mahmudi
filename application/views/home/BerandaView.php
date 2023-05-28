<?php $this->load->view('home/hometemplate/HeaderView') ?>
<div class="content-wrapper">
  <div class="container">
    <div class="row" data-aos="fade-up">
      <div class="col-xl-12 stretch-card grid-margin">
        <div class="position-relative">
          <img
          src="<?php echo base_url('assets/images') ?>/banner.jpeg"
          alt="banner"
          class="img-fluid"
          />
        </div>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
      <?php foreach ($berita as $key => $value): ?>
        <div class="col-lg-12 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row row-berita">
                <div class="col-sm-2 grid-margin">
                  <div class="position-relative">
                    <div class="rotate-img">
                      <img src="<?php echo base_url('assets/berita/').$value->gambar ?>" alt="thumb" class="img-fluid"/>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 grid-margin">
                  <a href="<?php echo base_url('berita/detail/').$value->id_berita ?>">
                    <h2 class="mb-2 font-weight-600">
                      <?php echo $value->judul_berita; ?>
                    </h2>
                  </a>
                  <div class="mb-0 isi">
                    <?php echo $value->isi ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
<?php $this->load->view('home/hometemplate/FooterView') ?>