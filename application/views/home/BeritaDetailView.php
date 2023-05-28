<?php $this->load->view('home/hometemplate/HeaderView') ?>
<div class="content-wrapper">
  <div class="container">
    <div class="row" data-aos="fade-up">
      <div class="col-12">
        <h1 class="text-center mb-5"><?php echo $berita['judul_berita'] ?></h1>
      </div>
      <div class="col-xl-12 stretch-card grid-margin">
        <div class="position-relative d-flex justify-content-center">
          <img class="w-75" src="<?php echo base_url('assets/berita/').$berita['gambar'] ?>" alt="banner" class="img-fluid"/>
        </div>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
        <div class="col-lg-12 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row row-berita">
                <div class="col-sm-10 grid-margin">
                  <div class="mb-0 isi">
                    <?php echo $berita['isi'] ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<?php $this->load->view('home/hometemplate/FooterView') ?>