<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Input</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css">
</head>
<style>
img {
  width: 250%;
  height: 710px;
}

h5 {
  color: red;
}

h6 {
  color: red;
  font-size: 20px;
}

.card {
  background-color: #C0C0C0;
}

.form-control {
  font: size 20px;
}
</style>


<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3">
                <img src="assets/img/sepatu.jpg" alt="......" , style:width="50%">
              </div>
              <div class="kolom col-lg-6 mx-5">>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h3 text-gray-900 mb-4"><strong>Output Transaksi</strong></h1>
                  </div>
                  <form class="user" method="post" action="#">
                    <div class="form-group">
                      <h5><strong>Nama Pembeli</strong></h5>
                      <p class="form-control ">
                        <?= $nama; ?>
                      </p>
                    </div>
                    <div class="form-group">
                      <h5><strong>NO. Handphone</strong></h5>
                      <p class="form-control ">
                        <?= $No; ?>
                      </p>

                    </div>
                    <div class="form-group ">
                      <h5><strong>Merk Sepatu</strong></h5>
                      <p class="form-control ">
                        <?= $merk; ?>
                      </p>

                    </div>
                    <div class="form-group">
                      <h5><strong>Ukuran</strong></h5>
                      <p class="form-control ">
                        <?= $ukuran; ?>
                      </p>

                    </div>
                    <div class="form-group">
                      <h5><strong>Total Harga</strong></h5>
                      <p class="form-control ">
                        <?= $harga; ?>
                      </p>

                    </div>
                    <hr>
                    <button class="btn btn-primary btn-user btn-block">
                      <a href="<?= base_url('Sepatu'); ?>">
                        <h6>Kembali</h6>
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>






  <fieldset>
    <legend><strong>Output Transaksi</strong></legend>

    <table>
      <tr>
        <th>Nama Pembeli</th>
        <td>:</td>
        <td>
          <?= $nama; ?>
        </td>
      </tr>

      <tr>
        <th>No. Handphone</th>
        <td>:</td>
        <td>
          <?= $No; ?>
        </td>
      </tr>

      <tr>
        <th>Merk Sepatu</th>
        <td>:</td>
        <td>
          <?= $merk; ?>
        </td>
      </tr>

      <tr>
        <th>ukuran</th>
        <td>:</td>
        <td>
          <?= $ukuran; ?>
        </td>
      </tr>

      <tr>
        <th>Harga</th>
        <td>:</td>
        <td>
          <?= $harga; ?>
        </td>
      </tr>

      <tr>
        <td colspan="3" align="center">
          <hr>
          <a href="<?= base_url('Sepatu'); ?>">Kembali</button>
        </td>
      </tr>

    </table>
  </fieldset>



</body>

</html>