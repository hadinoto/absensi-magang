<?php

if (!isset($_SESSION)) {
  session_start();
};

require_once '../connection.php';

// $cek = @$_GET['cek'];

$id_pasien = $_SESSION['pasien'];

if (isset($_SESSION['pasien'])) {
  $qp = mysqli_query($db, "SELECT * FROM pasien WHERE id_pasien = $id_pasien");
  $p = mysqli_fetch_assoc($qp);
};
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="../image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <img src="../assets/images/logo2/dark-logo.svg" width="230" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>

        <?php 
          if (isset($_SESSION['pasien'])) {
          # code...
          ?>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <!-- <span class="hide-menu">UI COMPONENTS</span> -->
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=profile" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Profile</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=jadwal_pemeriksaan" aria-expanded="false">
                <span>
                  <i class="ti ti-stethoscope"></i>
                </span>
                <span class="hide-menu">Jadwal Pemeriksaan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=jadwal_obat" aria-expanded="false">
                <span>
                  <i class="ti ti-pill"></i>
                </span>
                <span class="hide-menu">Informasi Jadwal Obat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_pemeriksaan" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Pemeriksaan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_prediksi" aria-expanded="false">
                <span>
                  <i class="ti ti-heartbeat"></i>
                </span>
                <span class="hide-menu">Data Prediksi Hipertensi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_olahraga" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Aktivitas Olahraga</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->

        <?php
          };
          ?>

        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>

          
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
          
          <?php 
          if (!isset($_SESSION['pasien'])) {
          ?>
            <a href="../pages/regist.php" class="btn btn-warning">Registrasi</a>
            <span style="width : 30px;"> </span>
            <a href="../pages/login.php" class="btn btn-primary">Login</a>
          <?php
          } else {
          ?>
             <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="../command/selesai_session.php" class="btn btn-outline-danger mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
          <?php
          };
          ?>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <!-- <img src="../../WhatsApp.jpeg" alt=""> -->

          <?php
            $hal = @$_GET['hal'];
            $modul = "";
            if (!isset($_SESSION['pasien'])) {
              $default = $modul . "dashboard.php";
            }else {
              $default = $modul . "prediksi.php";
            };
            
            if (!$hal) {
                require_once "$default";
            } else {
                switch ($hal) {
                    case $hal:
                        if (is_file($modul . $hal . ".php")) {
                            require_once $modul . $hal . ".php";
                        } else {
                            require_once "$default";
                        }
                        break;
                    default:
                        require_once "$default";
                }
            };

          ?>

        


    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>

  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  

  <!-- tanggal now -->
  <script>document.getElementById("date").valueAsDate = new Date();</script>

<script>

// the selector will match all input controls of type :checkbox
// and attach a click event handler 
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

</script>

<!-- <?php
 if ($cek=='true') {
  echo '<script language="javascript">';
  echo 'confirm(" ';
  echo $_SESSION['nama'];
  echo ' kamuu punya resiko hipertensi cukup tinggi apakah ingin melanjutkan pemeriksaan?");';
  echo '</script>';
  echo 'if(confirm()) {window.location = "../pages/regist.php";}else{}';
  echo '</script>';
 }elseif ($cek=='false') {
  echo '<script language="javascript">';
  echo 'confirm(" '; 
  echo $_SESSION['nama'];
  echo ' kamu punya resiko hipertensi yang cukup rendah apakah ingin melanjutkan pemeriksaan?");';
  echo 'if(confirm()) {window.location = "../pages/regist.php";}else{}';
  // echo 'document.location = "../pages/regist.php";';
  // echo 'else {document.location = "../pages/index.php";}';
  echo '</script>';
 }
?> -->

</body>
</html>
