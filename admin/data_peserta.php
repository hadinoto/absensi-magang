<!-- main -->
<div class="container-fluid">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                <h5 class="card-title fw-semibold mb-4 col-lg-8">Data Peserta Magang</h5>
                <hr class="solid" style="width:100%;">
                </div>
                <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                      <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No.</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">NIM</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">NAMA</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">JURUSAN</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tgl MULAI</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tgl SELESAI</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    $no = 1;
                    $query = "SELECT * FROM peserta WHERE confirm = '1'";
                    $result = $db->query($query);
                    $num_result = $result->num_rows;

                    if ($num_result > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            extract($data);
                    ?>
                    
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $no++ ?></h6></td>
                        <td class="border-bottom-0">
                          <h6 class="mb-0 fw-normal"><?php echo $nim ?></h6>                   
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $nama_lengkap ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $id_jurusan ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $tanggal_mulai ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $tanggal_selesai ?></p>
                        </td>

                        <td class="border-bottom-0" style="width: 30%;">
                        <a class="btn btn-primary" href="?hal=cek_peserta&id_peserta=<?php echo $id_peserta ?>">Cek data </a>
                        <!-- <a class="btn btn-primary" href="?hal=edit_peserta&id_peserta=<?php // echo $id_peserta ?>">Edit data</a> -->
                        <a class="btn btn-danger" href="../command/peserta.php?hapus_peserta=1&id_peserta=<?php echo $id_peserta?>">Hapus </a>
                        </td>
                        

                      </tr> 

                    <?php }
                    } ?>
                                          
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>