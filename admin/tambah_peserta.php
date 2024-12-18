

<!-- Main -->
<div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form</h5>
                <div class="card">
                  <div class="card-body">

                    <form  id="form" method="post" action="../command/peserta.php" enctype="multipart/form-data"> 
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
                    <label for="exampleInputtext1" class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" id="kelamin" class="form-select">
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>


                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Institusi</label>
                    <select name="id_institusi" id="institusi" class="form-select">
                      <option value="">Pilih Instansi</option>
                      <?php
                            $query = "SELECT * FROM institusi";
                            $result = $db->query($query);
                            $num_result = $result->num_rows;
                            if ($num_result > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    extract($data);
                          ?>

                          <option value="<?php echo $id_institusi; ?>"><?php echo $nama_institusi; ?></option>

                          <?php }
                            } ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Jurusan</label>
                    <select name="id_jurusan" id="jurusan" class="form-select"></select>
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
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nomor Hp</label>
                    <input name="no_hp" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" require>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Pass Foto</label>
                    <div class="form-group">
                      <div class="col-sm-4" style="margin-top: 10px;">
                          <span class="small">Upload Foto</span>
                          <input type="file" id="pass_foto" name="pass_foto" placeholder="pilih gambar" required>
                      </div>
                    </div>
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


  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- connect jurusan -->
  <script type="text/javascript">
	$('#institusi').change(function() { 
		var institusi = $(this).val(); 
		$.ajax({
			type: 'POST', 
			url: 'ajax.php', 
			data: 'institusi_bali=' + institusi, 
			success: function(response) { 
				$('#jurusan').html(response); 
			}
		});
	});
  </script>