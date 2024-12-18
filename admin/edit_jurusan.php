<?php
$id_jurusan = $_GET['id_jurusan'];
$id_institusi = $_GET['id_institusi'];

$qj = mysqli_query($db, "SELECT * FROM jurusan WHERE id_jurusan = $id_jurusan");
$j = mysqli_fetch_assoc($qjurusan);
// echo $d['nama'];s

$qi = mysqli_query($db, "SELECT * FROM institusi WHERE id_institusi = $id_institusi");
$i = mysqli_fetch_assoc($qi);
?>


<!-- Main -->
<div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form</h5>
                <div class="card">
                  <div class="card-body">
                    <form  id="form" method="post" action="../command/curd.php"> 
                    
                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Nama Institusi</label>
                        <input type="text" name="id_jurusan"  class="form-control" style="width:50%;" value="<?php echo $i['id_institusi'];?>" hidden>
                        <input type="text" name="nama_jurusan"  class="form-control"  style="width:50%;" value="<?php echo $i['nama_institusi'];?>" disabled>
                      </div>
                    </div>

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Nama Jurusan</label>
                        <input type="text" name="id_jurusan"  class="form-control" style="width:50%;" value="<?php echo $j['id_institusi'];?>" hidden>
                        <input type="text" name="nama_jurusan"  class="form-control"  style="width:50%;" value="<?php echo $j['nama_jurusan'];?>">
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <br> <br>

                      <div class="mb-3">
                        <button value="submit" type="submit" name="edit_jurusan" class="btn btn-primary">Submit</button>
                      </div>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>