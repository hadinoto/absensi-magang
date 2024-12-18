<?php

// var_dump($_POST);
// die;

session_start();

require '../connection.php';

// var_dump($_POST);
// var_dump($_GET);
// var_dump($_SESSION['daging']);
// var_dump($_POST['status']);
// die;

if (isset($_POST["registrasi"])) {

  // var_dump($_POST);
  // die;


    
  // ambil data
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $bpjs = $_POST['bpjs'];
  $ibu = $_POST['ibu'];
  $usia = $_POST['usia'];
  $kelamin = $_POST['kelamin'];
  $kawin = $_POST['status'];
  $tgl = $_POST['tgl'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $password = $_POST['password'];

// id pasien
    $idPasien = KodeOtomatis($db, 'pasien', 'id_pasien', '', '', '');
    $noRm = '0001'.$idPasien;

    // echo $idPasien;
    // die;

    $query_pasien = "INSERT INTO pasien VALUES ('$idPasien', '$noRm', '$nik', '$nama', '$no_hp', '$bpjs', '$ibu', '$usia', '$kelamin', '$tgl', '$alamat', '$email', '$password')";
    $pasien = mysqli_query($db, $query_pasien);

    $query = mysqli_query($db, "SELECT * FROM pasien WHERE email = '$email' AND password = '$password'");
    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if ($cek > 0) {
      $_SESSION['pasien'] = $data["id_pasien"];
    };

    // var_dump($_SESSION['pasien']);
    // die;

    if (isset($_SESSION['pasien'])) {
      header('Location: ../pages/index.php');
    } else {
      header('Location: ./command/selesai_session.php');
    }
  };

  if (isset($_POST["edit_pasien"])) {

    // var_dump($_POST);
    // die;
  
  
      
    // ambil data

    $id_pasien = $_POST['id_pasien'];
    
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $bpjs = $_POST['bpjs'];
    $ibu = $_POST['ibu'];
    $usia = $_POST['umur'];
    $kelamin = $_POST['kelamin'];
    // $kawin = $_POST['status'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
      // echo $idPasien;
      // die;
  
      $query_pasien = "UPDATE pasien SET nik='$nik', nama='$nama', no_hp='$no_hp', no_bpjs='$bpjs', nama_ibu='$ibu', usia='$usia', jenis_kelamin='$kelamin', tgl_lahir='$tgl', alamat='$alamat', email='$email', password='$password' WHERE id_pasien='$id_pasien'";
      $edit_pasien = mysqli_query($db, $query_pasien);

      // var_dump($edit_pasien);
      // die;

      if ($edit_pasien) {
        header('Location: ../admin/index.php?hal=data_pasien');
      } else {
        header('Location: ../admin/index.php?hal=data_pasien');
      }
    };

    if (isset($_GET["hapus_pasien"])) {

      $id_pasien = $_GET['id_pasien'];
      
      // var_dump($id_pasien);
      // die;
      
      // $query = mysqli_query($db, "SELECT * FROM pemeriksaan WHERE id_pasien = $id_pasien");
      // $pemeriksaan = mysqli_fetch_assoc($query);

      // $id_pemeriksaan = $pemeriksaan['id_pemeriksaan'];
      
      // if (isset($id_pemeriksaan)) {
      //   $qo = mysqli_query($db, "SELECT * FROM resep_obat WHERE id_pemeriksaan = $id_pemeriksaan");
      //   $o = mysqli_fetch_assoc($qo);
      
      //   $id_resep = $o['id_resep'];
      
      //   $qj = mysqli_query($db, "SELECT * FROM jadwal_obat WHERE id_resep = $id_resep");
      //   $j = mysqli_fetch_assoc($qj);
      // };
    
      // var_dump($id_pasien);
      // var_dump($id_pemeriksaan);
      // var_dump($id_resep);
      // var_dump($j['id_jadwal']);
      // die;

      $olahraga = "DELETE FROM aktivitas_olahraga  WHERE id_pasien = $id_pasien";
      $hapus_olahraga = mysqli_query($db, $olahraga);

      $resep = "DELETE FROM resep_obat  WHERE id_pasien = $id_pasien";
      $hapus_resep = mysqli_query($db, $resep);

      $jadwal_obat = "DELETE FROM jadwal_obat  WHERE id_pasien = $id_pasien";
      $hapus_jadwal_obat = mysqli_query($db, $jadwal_obat);

      $jadwal_pemeriksaan = "DELETE FROM jadwal_pemeriksaan  WHERE id_pasien = $id_pasien";
      $hapus_jadwal_pemeriksaan = mysqli_query($db, $jadwal_pemeriksaan);

      $pemeriksaan = "DELETE FROM pemeriksaan  WHERE id_pasien = $id_pasien";
      $hapus_pemeriksaan = mysqli_query($db, $pemeriksaan);

      $prediksi = "DELETE FROM prediksi  WHERE id_pasien = $id_pasien";
      $hapus_prediksi = mysqli_query($db, $prediksi);

      $pasien = "DELETE FROM pasien  WHERE id_pasien = $id_pasien";
      $hapus_pasien = mysqli_query($db, $pasien);

      // var_dump($hapus_olahraga);
      // var_dump($hapus_resep);
      // var_dump($hapus_jadwal_obat);
      // var_dump($hapus_jadwal_pemeriksaan);
      // var_dump($hapus_pemeriksaan);
      // var_dump($hapus_prediksi);
      // var_dump($hapus_pasien);
      // die;
    
      if ($query_hapus) {
        header('Location: ../admin/index.php?hal=data_pasien');
      } else {
        header('Location: ../admin/index.php?hal=data_pasien');
      }
    
    };



if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($db, "SELECT * FROM pasien WHERE email = '$email' AND password = '$password'");

    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);


    if ($cek > 0) {
        $_SESSION['pasien'] = $data["id_pasien"];
    };

    if (isset($_SESSION['pasien'])) {
        header("location: ../pages/index.php");
    } elseif (!isset($_SESSION['login_admin'])) {
        header("location: ../pages/login.php?error=1");
        echo "Gak Masuk Bos";
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