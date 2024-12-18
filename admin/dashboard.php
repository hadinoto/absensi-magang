<!-- main -->
<!-- <div class="container-fluid">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
              <img class="col-lg-12 d-flex align-items-stretch" src="../../gambar.jpeg" alt="">
            </div>
          </div>
      </div> -->

      <?php

      echo "masuk dashboard";
      die;

      $query_pasien = mysqli_query($db, "SELECT COUNT(id_pasien) FROM pasien");
      $pasien = mysqli_fetch_assoc($query_pasien);

      $query_obat = mysqli_query($db, "SELECT COUNT(id_obat) FROM data_obat");
      $obat = mysqli_fetch_assoc($query_obat);

      $query_pemeriksaan = mysqli_query($db, "SELECT COUNT(id_pemeriksaan) FROM pemeriksaan");
      $pemeriksaan = mysqli_fetch_assoc($query_pemeriksaan);
  
      ?>

      <div class="container-fluid">
      
      <!--  Row 1 -->
      <div class="row">
          <div class="col-lg-12">
            <div class="row">

              <div class="col-lg-4">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Jumlah Pasien</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php echo $pasien['COUNT(id_pasien)']; ?></h4>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">Sehat</span>
                          </div>
                          <div>
                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">Hipertensi</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Jumlah Obat</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php echo $obat['COUNT(id_obat)']; ?></h4>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                          <br>
                          </div>
                          <div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Jumlah Pemeriksaan</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php echo $pemeriksaan['COUNT(id_pemeriksaan)']; ?></h4>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">Sehat</span>
                          </div>
                          <div>
                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">Hipertensi</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>
          </div>
        </div>

        </div>