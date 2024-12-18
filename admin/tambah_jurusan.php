

<!-- Main -->
<div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form</h5>
                <div class="card">
                  <div class="card-body">
                    <form  id="form" method="post" action="../command/curd.php" enctype="multipart/form-data"> 
                    

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Institusi</label>
                        <select name="id_institusi" id="institusi" class="form-select" style="width: 20%;" require>
                          <option>Pilih Institusi</option>
                          <?php
                            $query = "SELECT * FROM institusi";
                            $result = $db->query($query);
                            $num_result = $result->num_rows;
                            if ($num_result > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    extract($data);
                          ?>

                          <option value="<?php echo $id_institusi;?>"><?php echo $nama_institusi; ?></option>

                          <?php }
                            } ?>
                        </select>
                      </div>
                    </div>

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" id="nama_jurusan"  class="form-control" aria-describedby="Nama" style="width:50%;" onchange="cekJurusan();" required>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <br> <br>

                      <div class="mb-3">
                        <button value="submit" type="submit" name="tambah_jurusan" class="btn btn-primary">Submit</button>
                      </div>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- check jurusan -->
    <!-- <script type="text/javascript">
        function cekJurusan() {

            var jurusan = $('[name=nama_jurusan]').val();

            // console.log(jurusan);

            $.ajax({
                type: 'POST',
                url: 'ajax.php',
                data: {
                    jr: jurusan
                },
                dataType: 'json',
                success: function(hasil) {
                    console.log(hasil);
                    if (hasil) {
                        alert(" jurusan sudah ada ");
                        document.getElementById('nama_jurusan').value = "";
                    }
                }
                // $('[name=jurusan]').val(hasil.jurusan);

            })
        } -->
    </script>