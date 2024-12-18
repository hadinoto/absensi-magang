<?php
$id_institusi = $_GET['id_institusi'];

$qinstitusi = mysqli_query($db, "SELECT * FROM institusi WHERE id_institusi = $id_institusi");
$institusi = mysqli_fetch_assoc($qinstitusi);
// echo $d['nama'];s
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
                        <input type="text" name="id_institusi"  class="form-control" style="width:50%;" value="<?php echo $institusi['id_institusi'];?>" hidden>
                        <input type="text" name="nama_institusi"  class="form-control"  style="width:50%;" value="<?php echo $institusi['nama_institusi'];?>">
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <br> <br>

                      <div class="mb-3">
                        <button value="submit" type="submit" name="edit_institusi" class="btn btn-primary">Submit</button>
                      </div>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>