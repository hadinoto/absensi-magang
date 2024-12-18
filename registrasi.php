<?php

// echo "ihiy";
require_once './connection.php';

session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-6 col-lg-6 col-xxl-8">
            <div class="card mb-0">
              <div class="card-body">
                <!-- <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="./assets/images/logos/dark-logo.svg" width="180" alt="">
                </a> -->
                <p class="text-center"></p>
                <form action="./command/peserta.php" method="post" enctype="multipart/form-data">

                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nim</label>
                    <input name="nim" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama Lengkap</label>
                    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama Panggilan</label>
                    <input name="nama_panggilan" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" id="kelamin" class="form-select">
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Lahir</label>
                    <input name="tgl" type="date" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>


                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Institusi</label>
                    <select name="institusi" class="form-select">
                      <option value="">Pilih Instansi</option>
                      <?php
                            $query = "SELECT * FROM institusi";
                            $result = $db->query($query);
                            $num_result = $result->num_rows;
                            if ($num_result > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    extract($data);
                          ?>

                          <option value="<?php echo $id_institusi; ?>" selected><?php echo $nama_institusi; ?></option>

                          <?php }
                            } ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-select">
                      <option value="">Pilih Jurusan</option>
                      <?php
                            $query = "SELECT * FROM jurusan";
                            $result = $db->query($query);
                            $num_result = $result->num_rows;
                            if ($num_result > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    extract($data);
                          ?>

                          <option value="<?php echo $id_jurusan; ?>"><?php echo $nama_jurusan; ?></option>

                          <?php }
                            } ?>
                    </select>
                  </div>



                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Pass Foto</label>
                    <select name="kelamin" id="kelamin" class="form-select">
                      <!-- <option value=""></option> -->
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Mulai Magang</label>
                    <input name="tgl_mulai" type="date" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Mulai Selesai</label>
                    <input name="tgl_selesai" type="date" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nomor Hp</label>
                    <input name="no_hp" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <!-- <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                  </div> -->
                  <button value="regist" type="submit" name="registrasi" class="btn btn-primary">Regist</button>
                  
                  <br><br><br>

                  <div class="d-flex align-items-left">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>