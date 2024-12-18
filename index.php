<?php
// header('location: ../web/login.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>SISTEM MONITORING DAN PREDIKSI HIPERTENSI PUSKESMAS NGAGLIK 1 SLEMAN</title> -->
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
     
    <!--  Header Start -->
      <header class="app-header">
        
      <div class="brand-logo d-flex align-items-center justify-content-between">
        
          <a href="./index.php " class="text-nowrap logo-img">
            <!-- <img src="assets/images/logo2/dark-logo.svg" width="230" alt="" /> -->
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <!-- <i class="ti ti-x fs-8"></i> -->
          </div>
          
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">

            <ul class="navbar-nav  justify-content-end">
              <a href="?hal=registrasi" class="btn btn-outline-primary m-1">Registrasi</a>
            </ul>

            <ul class="navbar-nav  justify-content-end">
              <a href="../web/login.php" class="btn btn-outline-primary m-1">Login</a>
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
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>
