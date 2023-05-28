<?php $this->load->view('home/hometemplate/HeaderView') ?>
<div class="content-wrapper">
  <div class="container">
    <div class="col-sm-12">
      <div class="card" data-aos="fade-up">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="font-weight-600 mb-4">
                BERITA
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <?php foreach ($berita as $key => $value): ?>
                <div class="row row-berita">
                  <div class="col-sm-4 grid-margin">
                    <div class="rotate-img">
                      <a href="<?php echo base_url('berita/detail/').$value->id_berita ?>">
                        <img
                        src="<?php echo base_url('assets/berita/').$value->gambar ?>"
                        alt="banner"
                        class="img-fluid"
                        />
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-8 grid-margin">
                    <a href="<?php echo base_url('berita/detail/').$value->id_berita ?>">
                      <h2 class="font-weight-600 mb-2">
                        <?php echo $value->judul_berita ?>
                      </h2>
                    </a>
              <!--       <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </p> -->
                    <div class="fs-15 isi">
                      <?php echo $value->isi ?>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php $this->load->view('home/hometemplate/FooterView') ?>