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

                <input class="mb-2 col-lg-2" type="date" name="tanggal_absen" id="tanggal_absen" onchange="filterByDate()">

                <hr class="solid" style="width:100%;">
                </div>
                <div class="table-responsive">
                
                <label for="datepicker">Pilih Tanggal:</label>
                <input type="date" id="datepicker" name="tanggal" onchange="kirimTanggal()">
    
                <!-- <p id="result"></p> -->
                <tbody> <?php include 'list_absensi.php'; ?> </tbody>


                </div>
              </div>
            </div>
          </div>
      </div>

      <script>
        function kirimTanggal() {
            var tanggal = document.getElementById("datepicker").value;
            
            // Mengirimkan data menggunakan AJAX ke PHP
            $.ajax({
                url: 'list_absensi.php', // File PHP untuk menerima data
                type: 'POST',
                data: {tanggal: tanggal}, // Mengirimkan nilai tanggal
                success: function(response) {
                    // Menampilkan respons dari PHP
                    document.getElementById("result").innerHTML = "Tanggal yang dipilih: " + response;
                },
                error: function() {
                    alert("Terjadi kesalahan dalam pengiriman data.");
                }
            });
        }
    </script>
