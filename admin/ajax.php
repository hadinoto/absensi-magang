<?php 

require_once '../connection.php';


// CHOOSE JURUSAN
$institusi = $_POST['institusi_bali'];
$tampil=mysqli_query($db, "SELECT * FROM jurusan WHERE id_institusi='$institusi'");
$jml=mysqli_num_rows($tampil);
 
if($jml > 0){    
    while($r=mysqli_fetch_array($tampil)){
        ?>
        <option value="<?php echo $r['id_jurusan'] ?>"><?php echo $r['nama_jurusan'] ?></option>
        <?php        
    }
};

// CHOOSE TANGGAL ABSEN

// Check if a date is provided in the URL
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai tanggal yang dikirim
    if (isset($_POST['tanggal'])) {
        $tanggal = $_POST['tanggal'];
        
        // Mengembalikan tanggal yang dipilih dalam format yang diinginkan
        echo $tanggal; // Mengirimkan respons kembali ke JavaScript
        
    }
}



// CHECK JURUSAN

// $newJurusan = $_POST['jr'];

// if ($_POST['jr']) {
//     $query = "SELECT nama_jurusan FROM jurusan WHERE nama_jurusan ='$newJurusan'";
//     $result = $db->query($query);
//     $data = mysqli_fetch_assoc($result);

//     if (!$data) {
//         echo json_encode($data);
//     } else {
//         echo json_encode($data);
//     }
// }


?>
