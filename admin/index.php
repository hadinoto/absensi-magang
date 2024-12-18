<?php

if (!isset($_SESSION)) {
    session_start();
};

require_once '../connection.php';

// $id_member = $_SESSION['admin'];
// $query = mysqli_query($db, "SELECT * FROM admin WHERE id_admin = $id_admin");
// $member = mysqli_fetch_assoc($query);


$id_admin = $_SESSION['login_admin'];

// echo "masuk dashboard";
// die;

// var_dump($id_admin);
// die;

if (isset($id_admin)) {

    $hal = @$_GET['hal'];
    // $id = $_SESSION['login_admin'];
    // die;

    $query = mysqli_query($db, "SELECT * FROM admin WHERE id_admin = $id_admin");
    $admin = mysqli_fetch_assoc($query);

    // var_dump($query);
    // echo "masuk query";
    // die; 

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>SISTEM MONITORING DAN PREDIKSI HIPERTENSI PUSKESMAS NGAGLIK 1 SLEMAN</title> -->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
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
          <a href="./index.php" class="text-nowrap logo-img" style="font-weight: bold;">
            ABSENSI PESERTA MAGANG
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./?hal=dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <br>

            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_institusi" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Institusi</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_jurusan" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Jurusan</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=pendaftaran" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Pendaftaran Peserta</span>
              </a>
            </li>

            <br>

            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_peserta" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Peserta Magang</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_absensi" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Absensi</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="?hal=data_progress" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Progress Magang</span>
              </a>
            </li>


          </ul>
        </nav>
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
              <a href="../command/selesai_session.php" class="btn btn-danger">Logout</a>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      

          <?php
            $hal = @$_GET['hal'];
            $modul = "";
            $default = $modul . "dashboard.php";
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
            }

          ?>
     
      

    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>

<?php

} else {
    echo "<script>window.location='login.php';</script>";
}

?>