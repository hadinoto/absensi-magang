<!-- main -->
<div class="container-fluid">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                <h5 class="card-title fw-semibold mb-3 col-lg-3">Data Absensi</h5>
                <a class="btn btn-primary mb-2 col-lg-2" href="?hal=tambah_peserta" aria-expanded="false" style="margin-right: 5px;">+ Hadir </a>
                <a class="btn btn-danger mb-2 col-lg-2" href="?hal=tambah_peserta" aria-expanded="false">- Tidak Hadir </a>
                <div class="col-lg-1"></div>
                <input class="mb-2 col-lg-2" type="date" name="tanggal_absen" id="tanggal_absen" value="now" onchange="">
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
                          <h6 class="fw-semibold mb-0">KETERANGAN</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    $no = 1;
                    $query = "SELECT * FROM absensi WHERE absen = '1'";
                    $result = $db->query($query);
                    $num_result = $result->num_rows;
                    if ($num_result > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            extract($data);

                            $qp = mysqli_query($db, "SELECT * FROM peserta WHERE id_peserta = $id_peserta");
                            $p = mysqli_fetch_assoc($qp);

                            $id_jurusan = $p['id_jurusan'];
                            $id_institusi = $p['id_institusi'];
                            
                            $qj = mysqli_query($db, "SELECT * FROM jurusan WHERE id_jurusan = $id_jurusan");
                            $j = mysqli_fetch_assoc($qj);

                            $qi = mysqli_query($db, "SELECT * FROM institusi WHERE id_institusi = $id_institusi");
                            $i = mysqli_fetch_assoc($qi);

                    ?>
                    
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $no++ ?></h6></td>
                        <td class="border-bottom-0">
                          <h6 class="mb-0 fw-normal"><?php echo $p['nim']; ?></h6>                   
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $p['nama_lengkap']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $j['nama_jurusan']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $tanggal; ?></p>
                        </td>

                        <td class="border-bottom-0" style="width: 30%;">
                        <a class="btn btn-primary" href="?hal=edit_peserta&id_peserta=<?php echo $id_peserta?>">Edit </a>
                        <a class="btn btn-danger" href="../command/curd.php?hapus_peserta=1&id_peserta=<?php echo $id_peserta?>">Hapus </a>
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