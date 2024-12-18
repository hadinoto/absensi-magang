<?php

// echo "ihiy";
require_once '../connection.php';

session_start();

// var_dump($_SESSION);
// die;

if (!isset($_SESSION['nama'])) {
  echo '<script language="javascript">';
  echo 'alert ("kamu harus mengisi data prediksi hipertensi terlebih dahulu!");';
  echo 'history.back();';
  echo '</script>';
};
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form action="../command/pasien.php" method="post" enctype="multipart/form-data">
                  <?php
                  ?>
                  <!-- <div class="mb-3">
                    <input name="sakit" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['sakit']; ?>" hidden>
                    <input name="nyeri" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['nyeri']; ?>" hidden>
                    <input name="olahraga" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['olahraga']; ?>" hidden>
                    <input name="daging" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['daging']; ?>" hidden>
                    <input name="gorengan" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['gorengan']; ?>" hidden>
                    <input name="fastfood" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['fastfood']; ?>" hidden>
                    <input name="mie" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['mie']; ?>" hidden>
                    <input name="kopi" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['kopi']; ?>" hidden>
                    <input name="asin" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['asin']; ?>" hidden>
                    <input name="buah" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['sayur']; ?>" hidden>
                    <input name="sayur" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['buah']; ?>" hidden>
                    <input name="insom" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['insom']; ?>" hidden>
                    <input name="tidur" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['tidur']; ?>" hidden>
                    <input name="rokok" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['rokok']; ?>" hidden>
                    <input name="alkohol" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['alkohol']; ?>" hidden>
                    <input name="keturunan" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['keturunan']; ?>" hidden>
                  </div> -->


                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nik</label>
                    <input name="nik" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['nama'];?>" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nomor Hp</label>
                    <input name="no_hp" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nomor BPJS</label>
                    <input name="bpjs" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama Ibu Kandung</label>
                    <input name="ibu" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Umur</label>
                    <input name="umur" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['umur'];?>"require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                    <input name="kelamin" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['kelamin'];?>"require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Status Pernikahan</label>
                    <input name="status" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $_SESSION['kawin'];?>"require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Lahir</label>
                    <input name="tgl" type="date" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button value="regist" type="submit" name="regist" class="btn btn-primary">Regist</button>
                  
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>