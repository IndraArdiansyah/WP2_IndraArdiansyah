<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pustaka_Booking | <?= $judul; ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/img/profile/'); ?>logo2.jpg">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
    type="text/css">
  <link href="<?= base_url('assets/'); ?>datatable/datatable.css" rel="stylesheet" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>">Pustaka</a>
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-expanded="false" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
        <span class="navbar-toggle-icon"></span>
      </button>

      <div class="collapse navabr-collapse" id="navbarAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= base_url(); ?>">Beranda <span
              class="sr-only">(current)</span></a>
          <?php 
          if (!empty($this->session->userdata('email'))) { ?>
          <a class="nav-item nav-link" href="#">Booking Buku</a>

          <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>">
            <i class="fas fw fa-login"></i>Log out</a>

          <?php } else { ?>

          <a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#">
            <i class="fa-solid fa-right-to-bracket"></i> Daftar</a>

          <a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#">
            <i class="fa-solid fa-right-to-bracket"></i>> Log in</a>

          <?php } ?>
          <span class="nav-item nav-link nav-right" style="display:block; margin-left:20px;"> Selamat Datang
            <b><?= $user; ?></b></span>
        </div>
      </div>
    </div>
  </nav>


</body>

</html>