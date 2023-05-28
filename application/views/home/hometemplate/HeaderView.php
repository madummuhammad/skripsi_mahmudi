<!DOCTYPE html>
<html lang="zxx">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>MTs Bustanul Arifin</title>
  <!-- plugin css for this page -->
  <link
  rel="stylesheet"
  href="<?php echo base_url('assets/home') ?>/assets/vendors/mdi/css/materialdesignicons.min.css"
  />
  <link rel="stylesheet" href="<?php echo base_url('assets/home') ?>/assets/vendors/aos/dist/aos.css/aos.css" />

  <!-- End plugin css for this page -->
  <link rel="shortcut icon" href="<?php echo base_url('assets') ?>/images/logo.png" />

  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/home') ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/home') ?>/assets/css/custom.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <!-- partial:partials/_navbar.html -->
      <header id="header" class="bg-custom-primary">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-bottom pb-0">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                  <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/') ?>/images/logo.png" style="width: 100px;" alt=""
                    /></a>
                    <div class="d-flex flex-column justify-content-center pb-2">
                      <span class="m-0 p-0 text-white">Penerimaan Siswa Baru</span>
                      <span class="m-0 p-0 text-white">MTs Bustanul Arifin</span>
                      <span class="m-0 p-0 text-white">Tramok Kokop Bangkalan</span>
                    </div>
                  </div>
                  <div>
                    <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                  >
                  <ul
                  class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                  <li>
                    <button class="navbar-close">
                      <i class="mdi mdi-close"></i>
                    </button>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('/') ?>">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('berita') ?>">Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('profile') ?>">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pengumuman') ?>">Pengumuman</a>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="social-media">
              <li>
                <a class="px-4 bg-transparent" href="<?php echo base_url('register') ?>">Daftar</a>
              </li>
              <li>
                <a class="px-4" href="<?php echo base_url('login') ?>">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>