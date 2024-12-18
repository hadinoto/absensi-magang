<?php
include("../connection.php");

session_start();

// var_dump($_POST['test']);
// $test = $_POST['test'];
// echo $test;
// die;

if (isset($_POST["olahraga"])) {
  $id = $_POST['id'];
  $olahraga = $_POST['jenis_olahraga'];
  $date = $_POST['date'];

  $idOlahraga = KodeOtomatis($db, 'aktivitas_olahraga', 'id_aktivitas_olahraga', '', '', '');


  $aktivitas = "INSERT INTO aktivitas_olahraga VALUES ('$idOlahraga', '$id', '$olahraga', '$date')";
  $query_aktivitas = mysqli_query($db, $aktivitas);

  if ($query_aktivitas) {
    header('Location: ../pages/index.php?hal=data_olahraga');
  } else {
    header('Location: ../pages/index.php');
  }

};

if (isset($_GET["minum"])) {
  $id_jadwal = $_GET['id'];

  // var_dump($_GET);
  // die;

  $edit = "UPDATE jadwal_obat SET status ='0' WHERE id_jadwal='$id_jadwal'";
  $query_edit = mysqli_query($db, $edit);

  if ($query_edit) {
    header('Location: ../pages/index.php?hal=jadwal_obat');
  } else {
    header('Location: ../pages/index.php');
  }

};

if (isset($_GET['permintaan'])) {


  $id_pasien = $_GET['id'];

  $cek = mysqli_query($db, "SELECT id_pasien FROM permintaan WHERE id_pasien = $id_pasien");
  $query_cek = mysqli_fetch_assoc($cek);

  // var_dump($query_cek);
  // die;

  if ($query_cek) {
    echo "<script>
    window.location='../pages/index.php?hal=jadwal_pemeriksaan&penuh';
    </script>";
  } else {
    
  $idPermintaan = KodeOtomatis($db, 'permintaan', 'id_permintaan', '', '', '');

  $permintaan = "INSERT INTO permintaan VALUES ('$idPermintaan', '$id_pasien')";
  $query_permintaan = mysqli_query($db, $permintaan);

  if ($query_permintaan) {
    header('Location: ../pages/index.php?hal=jadwal_pemeriksaan');
  } else {
    header('Location: ../pages/index.php?hal=jadwal_pemeriksaan');
  }

  }

};

if (isset($_POST['jadwal_pemeriksaan'])) {

  $id_pasien = $_POST['pasien'];
  $id_dokter = $_POST['dokter'];
  $tgl = $_POST['tgl'];

  // var_dump($_POST);
  // die;

  $idJadwal = KodeOtomatis($db, 'jadwal_pemeriksaan', 'id_jadwal', '', '', '');

  $jadwal = "INSERT INTO jadwal_pemeriksaan VALUES ('$idJadwal', '$id_pasien', '$id_dokter', '$tgl' )";
  $query_jadwal = mysqli_query($db, $jadwal);
  
  // var_dump($query_jadwal);
  // die;

  if ($query_jadwal) {
    header('Location: ../admin/index.php');
  } else {
    header('Location: ../admin/index.php');
  }

};

if (isset($_POST["pemeriksaan"])) {

  $id_pasien = $_POST['id_pasien'];
  $id_dokter = $_POST['id_dokter'];
  $tgl = $_POST['tgl'];

  $tinggi = $_POST['tinggi'];
  $berat = $_POST['berat'];
  $tekanan = $_POST['tekanan'];
  $nadi = $_POST['nadi'];

  $diagnosa = $_POST['diagnosa'];

  $obat1 = $_POST['obat1'];
  if ($obat1 == '-') {
    $obat1;
  }else {
    $o1 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat1'");
    $stock_o1 = mysqli_fetch_assoc($o1);

    $out = intval($stock_o1['stock'])-1;

    $eo1 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat1'";
    $query_eo1 = mysqli_query($db, $eo1);

    // var_dump($query_eo1);
    // die;
  };

  $obat2 = $_POST['obat2'];
  if ($obat2 == '-') {
    $obat2;
  }else {
    $o2 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat2'");
    $stock_o2 = mysqli_fetch_assoc($o2);

    $out = intval($stock_o2['stock'])-1;

    $eo2 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat2'";
    $query_eo2 = mysqli_query($db, $eo2);
  };

  $obat3 = $_POST['obat3'];
  if ($obat3 == '-') {
    $obat3;
  }else {
    $o3 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat3'");
    $stock_o3 = mysqli_fetch_assoc($o3);

    $out = intval($stock_o3['stock'])-1;

    $eo3 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat3'";
    $query_eo3 = mysqli_query($db, $eo3);
  };

  $obat4 = $_POST['obat4'];
  if ($obat4 == '-') {
    $obat4;
  }else {
    $o4 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat4'");
    $stock_o4 = mysqli_fetch_assoc($o4);

    $out = intval($stock_o4['stock'])-1;

    $eo1 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat4'";
    $query_eo4 = mysqli_query($db, $eo4);
  };

  $obat5 = $_POST['obat5'];
  if ($obat5 == '-') {
    $obat5;
  }else {
    $o5 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat5'");
    $stock_o5 = mysqli_fetch_assoc($o5);

    $out = intval($stock_o5['stock'])-1;

    $eo1 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat5'";
    $query_eo5 = mysqli_query($db, $eo5);
  };

  $obat6 = $_POST['obat6'];
  if ($obat6 == '-') {
    $obat6;
  }else {
    $o6 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat6'");
    $stock_o6 = mysqli_fetch_assoc($o5);

    $out = intval($stock_o6['stock'])-1;

    $eo1 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat6'";
    $query_eo6 = mysqli_query($db, $eo6);
  };

  $obat7 = $_POST['obat7'];
  if ($obat7 == '-') {
    $obat7;
  }else {
    $o7 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat7'");
    $stock_o7 = mysqli_fetch_assoc($o7);

    $out = intval($stock_o7['stock'])-1;

    $eo7 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat7'";
    $query_eo7 = mysqli_query($db, $eo7);
  };

  $obat8 = $_POST['obat8'];
  if ($obat8 == '-') {
    $obat8;
  }else {
    $o8 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat8'");
    $stock_o8 = mysqli_fetch_assoc($o8);

    $out = intval($stock_o8['stock'])-1;

    $eo8 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat8'";
    $query_eo8 = mysqli_query($db, $eo8);
  };

  $obat9 = $_POST['obat9'];
  if ($obat9 == '-') {
    $obat9;
  }else {
    $o9 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat9'");
    $stock_o9 = mysqli_fetch_assoc($o9);

    $out = intval($stock_o9['stock'])-1;

    $eo9 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat9'";
    $query_eo9 = mysqli_query($db, $eo9);
  };

  $obat10 = $_POST['obat10'];
  if ($obat10 == '-') {
    $obat10;
  }else {
    $o10 = mysqli_query($db, "SELECT stock FROM data_obat WHERE obat = '$obat10'");
    $stock_o10 = mysqli_fetch_assoc($o10);

    $out = intval($stock_o10['stock'])-1;

    $eo10 = "UPDATE data_obat SET stock = $out WHERE obat ='$obat10'";
    $query_eo10 = mysqli_query($db, $eo10);
  };

  $anjuran1 = $_POST['anjuran1'];
  $anjuran2 = $_POST['anjuran2'];
  $anjuran3 = $_POST['anjuran3'];
  $anjuran4 = $_POST['anjuran4'];
  $anjuran5 = $_POST['anjuran5'];
  $anjuran6 = $_POST['anjuran6'];
  $anjuran7 = $_POST['anjuran7'];
  $anjuran8 = $_POST['anjuran8'];
  $anjuran9 = $_POST['anjuran9'];
  $anjuran10 = $_POST['anjuran10'];

  $status = '1';



  // echo $anjuran1;
  // echo $anjuran2;
  // echo $anjuran3;
  // echo $anjuran4;
  // echo $anjuran5;
  // echo $anjuran6;
  // echo $anjuran7;
  // echo $anjuran8;
  // echo $anjuran9;
  // echo $anjuran10;
  // die;




  $idPemeriksaan = KodeOtomatis($db, 'pemeriksaan', 'id_pemeriksaan', '', '', '');
  $idResep = KodeOtomatis($db, 'resep_obat', 'id_resep', '', '', '');
  $idJadwal = KodeOtomatis($db, 'jadwal_obat', 'id_jadwal', '', '', '');


  $pemeriksaan = "INSERT INTO pemeriksaan VALUES ('$idPemeriksaan', '$id_pasien', '$id_dokter', '$tgl', '$tinggi', '$berat', '$tekanan', '$nadi', '$diagnosa')";
  $query_pemeriksaan = mysqli_query($db, $pemeriksaan);

  // var_dump($query_pemeriksaan);
  // die;

  $resep = "INSERT INTO resep_obat VALUES ('$idResep', '$idPemeriksaan', '$id_pasien', '$obat1', '$obat2', '$obat3', '$obat4', '$obat5', '$obat6', '$obat7', '$obat8', '$obat9', '$obat10')";
  $query_resep = mysqli_query($db, $resep);

  // var_dump($query_resep);
  // die;

  $jadwal = "INSERT INTO jadwal_obat VALUES ('$idJadwal', '$id_pasien', '$idResep', '$anjuran1', '$anjuran2', '$anjuran3', '$anjuran4', '$anjuran5', '$anjuran6', '$anjuran7', '$anjuran8', '$anjuran9', '$anjuran10', $status)";
  $query_jadwal = mysqli_query($db, $jadwal);

  // var_dump($query_jadwal);
  // die;

  if ($query_jadwal) {
    header('Location: ../admin/index.php?hal=data_pemeriksaan');
  } else {
    header('Location: ../admin/index.php?hal=data_pemeriksaan');
  }

};


if (isset($_POST["tambah_obat"])) {

  $jenis = $_POST['jenis_obat'];
  $stock = $_POST['stock'];
  $idObat = KodeOtomatis($db, 'data_obat', 'id_obat', '', '', '');

  $obat = "INSERT INTO data_obat VALUES ('$idObat','$jenis','$stock')";
  $query_obat = mysqli_query($db, $obat);

  if ($query_obat) {
    header('Location: ../admin/index.php?hal=data_obat');
  } else {
    header('Location: ../admin/index.php?hal=data_obat');
  }

};
if (isset($_POST["edit_obat"])) {

  // var_dump($_POST);
  // die;

  $id_obat = $_POST['id_obat'];
  $obat = $_POST['jenis_obat'];
  $stock = $_POST['stock'];


  // $idDokter = KodeOtomatis($db, 'dokter', 'id_dokter', '', '', '');

  $edit = "UPDATE data_obat SET obat='$obat', stock='$stock' WHERE id_obat='$id_obat'";
  $query_edit = mysqli_query($db, $edit);

  // var_dump($query_edit);
  // die;

  if ($query_edit) {
    header('Location: ../admin/index.php?hal=data_obat');
  } else {
    header('Location: ../admin/index.php?hal=data_obat');
  }

};
if (isset($_GET["hapus_obat"])) {

  $id_obat= $_GET['id_obat'];

  $hapus = "DELETE FROM data_obat WHERE id_obat = $id_obat";
  $query_hapus = mysqli_query($db, $hapus);

  if ($query_hapus) {
    header('Location: ../admin/index.php?hal=data_obat');
  } else {
    header('Location: ../admin/index.php?hal=data_obat');
  }

};



if (isset($_POST["tambah_olahraga"])) {

  $jenis = $_POST['jenis_olahraga'];
  $idOlahraga = KodeOtomatis($db, 'olahraga', 'id_olahraga', '', '', '');

  $olahraga = "INSERT INTO olahraga VALUES ('$idOlahraga','$jenis')";
  $query_olahraga = mysqli_query($db, $olahraga);

  if ($query_olahraga) {
    header('Location: ../admin/index.php?hal=data_olahraga');
  } else {
    header('Location: ../admin/index.php?hal=data_olahraga');
  }

};
if (isset($_POST["edit_olahraga"])) {

  // var_dump($_POST);
  // die;

  $id_olahraga = $_POST['id_olahraga'];
  $olahraga = $_POST['jenis_olahraga'];


  // $idDokter = KodeOtomatis($db, 'dokter', 'id_dokter', '', '', '');

  $edit = "UPDATE olahraga SET jenis_olahraga='$olahraga' WHERE id_olahraga='$id_olahraga'";
  $query_edit = mysqli_query($db, $edit);

  // var_dump($query_edit);
  // die;

  if ($query_edit) {
    header('Location: ../admin/index.php?hal=data_olahraga');
  } else {
    header('Location: ../admin/index.php?hal=data_olahraga');
  }

};
if (isset($_GET["hapus_olahraga"])) {

  $id_olahraga= $_GET['id_olahraga'];

  $hapus = "DELETE FROM olahraga WHERE id_olahraga = $id_olahraga";
  $query_hapus = mysqli_query($db, $hapus);

  if ($query_hapus) {
    header('Location: ../admin/index.php?hal=data_olahraga');
  } else {
    header('Location: ../admin/index.php?hal=data_olahraga');
  }

};



if (isset($_POST["tambah_dokter"])) {

  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $kelamin = $_POST['kelamin'];
  $tlp = $_POST['tlp'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];


  // var_dump($nama);
  // var_dump($kelamin);
  // var_dump($tlp);
  // var_dump($alamat);
  // die;

  $idDokter = KodeOtomatis($db, 'dokter', 'id_dokter', '', '', '');

  $dokter = "INSERT INTO dokter VALUES ('$idDokter', '$nip', '$nama', '$kelamin', '$tlp', '$email', '$alamat')";
  $query_dokter = mysqli_query($db, $dokter);

  if ($query_dokter) {
    header('Location: ../admin/index.php?hal=data_dokter');
  } else {
    header('Location: ../admin/index.php?hal=data_dokter');
  }

};
if (isset($_POST["edit_dokter"])) {

  // var_dump($_POST);
  // die;

  $id_dokter = $_POST['id_dokter'];

  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $kelamin = $_POST['kelamin'];
  $tlp = $_POST['tlp'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];


  // $idDokter = KodeOtomatis($db, 'dokter', 'id_dokter', '', '', '');

  $edit = "UPDATE dokter SET nip_dokter='$nip', nama='$nama', jenis_kelamin='$kelamin', no_hp='$tlp', email='$email', alamat='$alamat' WHERE id_dokter='$id_dokter'";
  $query_edit = mysqli_query($db, $edit);

  // var_dump($query_edit);
  // die;

  if ($query_edit) {
    header('Location: ../admin/index.php?hal=data_dokter');
  } else {
    header('Location: ../admin/index.php?hal=data_dokter');
  }

};
if (isset($_GET["hapus_dokter"])) {

  $id_dokter = $_GET['id_dokter'];

  $hapus = "DELETE FROM dokter WHERE id_dokter = $id_dokter";
  $query_hapus = mysqli_query($db, $hapus);

  if ($query_hapus) {
    header('Location: ../admin/index.php?hal=data_dokter');
  } else {
    header('Location: ../admin/index.php?hal=data_dokter');
  }

};


// var_dump($_POST);
// die;

if (isset($_POST['test'])) {

  // var_dump($_POST);
  // die;

  $id_pasien = $_POST['id_pasien'];
  $usia = $_POST['umur'];
  $tgl = $_POST['date'];
  $kelamin = $_POST['kelamin'];
  $status = $_POST['status'];

  $asakit = $_POST['sakit'];
  $sakit = $asakit['1']['0'];
  $_SESSION['sakit'] = $sakit;
  
  $anyeri = $_POST['nyeri'];
  $nyeri = $anyeri['1']['0'];
  $_SESSION['nyeri'] = $nyeri;
  
  $aberolahraga = $_POST['berolahraga'];
  $berolahraga = $aberolahraga['1']['0'];
  $_SESSION['berolahraga'] = $berolahraga;
  
  $adaging = $_POST['daging'];
  $daging = $adaging['1']['0'];
  $_SESSION['daging'] = $daging;
  
  $agorengan = $_POST['gorengan'];
  $gorengan = $agorengan['1']['0'];
  $_SESSION['gorengan'] = $gorengan;
  
  $afastfood = $_POST['fastfood'];
  $fastfood = $afastfood['1']['0'];
  $_SESSION['fastfood'] = $fastfood;
  
  $amie = $_POST['mie'];
  $mie = $amie['1']['0'];
  $_SESSION['mie'] = $mie;
  
  $akopi = $_POST['kopi'];
  $kopi = $akopi['1']['0'];
  $_SESSION['kopi'] = $kopi;
  
  $aasin = $_POST['asin'];
  $asin = $aasin['1']['0'];
  $_SESSION['asin'] = $asin;
  
  $abuah = $_POST['buah'];
  $buah = $abuah['1']['0'];
  $_SESSION['buah'] = $buah;
  
  $asayur= $_POST['sayur'];
  $sayur = $asayur['1']['0'];
  $_SESSION['sayur'] = $sayur;
  
  $ainsom = $_POST['insom'];
  $insom = $ainsom['1']['0'];
  $_SESSION['insom'] = $insom;
  
  $atidur = $_POST['tidur'];
  $tidur = $atidur['1']['0'];
  $_SESSION['tidur'] = $tidur;
  
  $arokok = $_POST['rokok'];
  $rokok = $arokok['1']['0'];
  $_SESSION['rokok'] = $rokok;
  
  $aalkohol = $_POST['alkohol'];
  $alkohol = $aalkohol['1']['0'];
  $_SESSION['alkohol'] = $alkohol;
  
  $aketurunan = $_POST['keturunan'];
  $keturunan = $aketurunan['1']['0'];
  $_SESSION['keturunan'] = $keturunan;
  
  
  // echo "id pasien : $id_pasien ";
  // echo "usia : $usia ";
  // echo "tgl : $tgl ";
  // echo "kelamin : $kelamin ";
  // echo "status : $status ";
  // echo "sakit : $sakit ";
  // echo "nyeri : $nyeri ";
  // echo "olahraga : $berolahraga ";
  // echo "daging : $daging ";
  // echo "gorengan : $gorengan ";
  // echo "fastfood : $fastfood ";
  // echo "mie : $mie ";
  // echo "kopi : $kopi ";
  // echo "asin : $asin ";
  // echo "buah : $buah ";
  // echo "sayur : $sayur ";
  // echo "insom : $insom ";
  // echo "tidur : $tidur ";
  // echo "rokok : $rokok ";
  // echo "alkohol : $alkohol ";
  // echo "keturunan : $keturunan ";

  // die;
  $hapus = "DELETE FROM prediksi WHERE id_pasien = $id_pasien";
  $query_hapus = mysqli_query($db, $hapus);

  if ($query_hapus) {
    
    $idPrediksi = KodeOtomatis($db, 'prediksi', 'id_prediksi', '', '', '');

    $prediksi = "INSERT INTO prediksi VALUES ('$idPrediksi', '$tgl', '$id_pasien', '$usia', '$kelamin', '$status', '$sakit', '$nyeri', '$berolahraga', '$daging', '$gorengan', '$fastfood', '$mie', '$kopi', '$asin', '$buah', '$sayur', '$insom', '$tidur', '$rokok', '$alkohol', '$keturunan')";
    $query_prediksi = mysqli_query($db, $prediksi);


  if ($query_prediksi) {
    header('Location: ../pages/index.php?hal=data_prediksi');
  } else {
    header('Location: ../pages/index.php?hal=data_prediksi');
  }
  };

};



  //kode otomatis
  function KodeOtomatis($conn, $tabel, $id, $inisial, $index, $panjang)
  {
    $query  = "SELECT max(" . $id . ") as max_id FROM `" . $tabel . "` WHERE " . $id . " LIKE '" . $inisial . "%'";
    $data   = $conn->query($query)->fetch_array();
    $id_max = $data['max_id'];
  
    if ($index == '' && $panjang == '') {
      $no_urut  = (int) $id_max;
    } else if ($index != '' && $panjang == '') {
      $no_urut    = (int) substr($id_max, $index);
    } else {
      $no_urut  = (int) substr($id_max, $index, $panjang);
    }
    $no_urut  = $no_urut + 1;
    if ($index == '' && $panjang == '') {
      $id_baru  = $no_urut;
    } else if ($index != '' && $panjang == '') {
      $id_baru  = $inisial . $no_urut;
    } else {
      $id_baru  = $inisial . sprintf("%0$panjang" . "s", $no_urut);
    }
    return $id_baru;
  };


?>

