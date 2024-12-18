<!-- Main -->
<div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form</h5>
                <div class="card">
                  <div class="card-body">
                    <form  id="form" method="post" action="../command/test.php"> 
                    

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Nama</label>
                        <input type="text" name="nama"  class="form-control" id="inputNama" aria-describedby="Nama" style="width:50%;" required>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Umur</label>
                        <input type="number" name="umur"  class="form-control" id="inputUmur" aria-describedby="Umur" style="width:20%;" required>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-select" style="width: 20%;">
                          <option>Jenis Kelamin</option>
                          
                        
                        <?php
                            $no = 1;
                            $query = "SELECT * FROM kelamin";
                            $result = $db->query($query);
                            $num_result = $result->num_rows;
                            if ($num_result > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    extract($data);
                            ?>
                                    <option value="<?php echo $jenis_kelamin; ?>" require><?php echo $jenis_kelamin; ?></option>
                            <?php }
                            } ?>

                        </select>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">Status</label>
                        <select name="status" id="status" class="form-select" style="width: 20%;">
                          <option>Status Pernikahan</option>
                          
                        
                        <?php
                            $no = 1;
                            $query = "SELECT * FROM status";
                            $result = $db->query($query);
                            $num_result = $result->num_rows;
                            if ($num_result > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    extract($data);
                            ?>
                                    <option value="<?php echo $status_pernikahan; ?>" require><?php echo $status_pernikahan; ?></option>
                            <?php }
                            } ?>

                        </select>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">
                    
                    <br><br>

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">1. Apakah anda mengalami sakit kepala?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="sakit[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="sakit[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">
                    
                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">2. Apakah anda mengalami nyeri?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="nyeri[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="nyeri[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">3. Apakah anda rutin berolahraga?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="olahraga[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="olahraga[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">4. Apakah anda rutin mengkonsumsi daging?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="daging[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="daging[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">5. Apakah anda rutin mengkonsumsi gorengan?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="gorengan[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="gorengan[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">6. Apakah anda rutin mengkonsumsi makanan cepat saji?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="fastfood[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="fastfood[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">7. Apakah anda rutin mengkonsumsi mie instan?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="mie[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="mie[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">8. Apakah anda rutin mengkonsumsi kopi?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="kopi[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="kopi[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">9. Apakah anda rutin mengkonsumsi makanan asin?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="asin[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="asin[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">10. Apakah anda rutin mengkonsumsi buah?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="buah[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="buah[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">11. Apakah anda rutin mengkonsumsi sayur?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="sayur[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="sayur[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">12. Apakah anda mengalami insomnia / gangguan tidur?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="insom[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="insom[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">13. Apakah anda cukup tidur?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="tidur[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="tidur[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">14. Apakah anda rutin mengkonsumsi rokok?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="rokok[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="rokok[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">15. Apakah anda rutin mengkonsumsi alkohol?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="alkohol[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="alkohol[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: large; font-weight: normal;">16. Apakah anda punya riwayat keturunan hipertensi?</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="keturunan[1][]">
                        <label class="form-check-label" for="exampleCheck1">Ya</label>
                      </div>
                      <div class="mb-3 form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="0" name="keturunan[1][]">
                        <label class="form-check-label" for="exampleCheck1">Tidak</label>
                      </div>
                    </div>

                    <hr class="solid" style="width:20%;">

                    <br> <br>

                      <div class="mb-3">
                        <button value="submit" type="submit" name="test" class="btn btn-primary">Submit</button>
                      </div>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>