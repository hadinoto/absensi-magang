
<?php
  
  $id_peserta = $_GET['id_peserta'];

  $query = "SELECT * FROM peserta WHERE id_peserta = $id_peserta";
  $result = $db->query($query);
  $num_result = $result->num_rows;
  if ($num_result > 0) {
       while ($data = mysqli_fetch_assoc($result)) {
          extract($data);
      
          $qi = mysqli_query($db, "SELECT * FROM institusi WHERE id_institusi = $id_institusi");
          $i = mysqli_fetch_assoc($qi);
          $institusi = $i['nama_institusi'];

          $qj = mysqli_query($db, "SELECT * FROM jurusan WHERE id_jurusan = $id_jurusan");
          $j = mysqli_fetch_assoc($qj);
          $jurusan = $j['nama_jurusan'];
  ?>

<!-- Main -->
<div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Cek Data Pendaftar Magang</h5>
                <div class="card">
                  <div class="card-body">

                  <form  id="form" method="post" action="../command/peserta.php" enctype="multipart/form-data"> 
                  <div>
                    <img src="../upload/foto_peserta/<?php echo $pass_foto; ?>" alt="" style="max-width: 90%; min-width: 70%">
                  </div>
                  <br>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nim</label>
                    <input name="nim" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $nim; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama Lengkap</label>
                    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $nama_lengkap; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama Panggilan</label>
                    <input name="nama_panggilan" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $nama_panggilan; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $kelamin; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $tempat_lahir; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $alamat; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $tanggal_lahir; ?>" disabled>
                  </div>


                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Institusi</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $institusi; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $jurusan; ?>" disabled>
                    </select>
                  </div>


                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Mulai Magang</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $tanggal_mulai; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Mulai Selesai</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $tanggal_selesai; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $email; ?>" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="<?php echo $no_hp; ?>" disabled>
                  </div>

                  <!-- <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                  </div> -->

                  <br>

                  <?php if ($confirm == '1') {?>
                    <a class="btn btn-danger" href="../command/peserta.php?hapus_peserta=1&id_peserta=<?php echo $id_peserta?>">Hapus</a>
                  <?php } else {?>
                    <!-- <a class="btn btn-primary" href="../command/peserta.php?konfirmasi=1&id_peserta=<?php echo $id_peserta?>">Konfirmasi</a> -->
                    <a onclick="showConfirm()" class="btn btn-primary">Konfirmasi</a>
                    <script>
                        function showConfirm() {
                        // Menampilkan alert dengan dua pilihan: OK dan Cancel
                            var result = confirm("Apakah Anda yakin ingin melanjutkan?");
            
                            if (result) {window.location.href = "../command/peserta.php?konfirmasi=1&id_peserta=<?php echo $id_peserta?>";
                            }
                        }
                    </script>
                    <a class="btn btn-danger" href="../command/peserta.php?hapus_peserta=1&id_peserta=<?php echo $id_peserta?>">Tolak</a>
                  <?php }?>
                  
                  <br><br><br>

                    </form>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


  <?php }
  } ?>