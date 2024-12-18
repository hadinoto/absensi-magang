<?php

session_start();

require '../connection.php';

// var_dump($_POST);
// var_dump($_GET);
// die;

if (isset($_POST["registrasi"])) {
    
  // ambil data
  $nim = $_POST['nim'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $nama_panggilan = $_POST['nama_panggilan'];
  $kelamin = $_POST['kelamin'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $alamat = $_POST['alamat'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $id_institusi = $_POST['id_institusi'];
  $id_jurusan = $_POST['id_jurusan'];
  $tgl_mulai = $_POST['tgl_mulai'];
  $tgl_selesai = $_POST['tgl_selesai'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];

  // var_dump($_FILES);
  // die;

  if ($_FILES) {

  $pass_foto = passFoto();
  // $pass_foto = "test";

  $username = "none";
  $password = "none";
  $confirm = '0';

  // var_dump($_POST);
  // var_dump($pass_foto);
  // var_dump($username);
  // var_dump($password);
  // die;

  // id peserta
    $idPeserta = KodeOtomatis($db, 'peserta', 'id_peserta', '', '', '');

    $query_peserta = "INSERT INTO peserta VALUES ('$idPeserta', '$nim', '$nama_lengkap', '$nama_panggilan', '$kelamin', '$tempat_lahir', '$alamat', '$tgl_lahir', '$id_institusi', '$id_jurusan', '$tgl_mulai', '$tgl_selesai', '$email', '$no_hp', '$pass_foto', '$username', '$password', '$confirm')";
    $peserta = mysqli_query($db, $query_peserta);

  // var_dump($peserta);
  // die;


    if ($peserta) {
      header('Location: ../admin/index.php?hal=pendaftaran');
    } else {
      header('Location: ../admin/index.php?hal=pendaftaran');
    }
  }
  
  };

  if (isset($_POST["edit_pasien"])) {
  
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

    if (isset($_GET["konfirmasi"])) {

      $id_peserta = $_GET['id_peserta'];
      $confirm = '1';
  
      $peserta = "UPDATE peserta SET confirm = '$confirm' WHERE id_peserta = $id_peserta";
      $konfirmasi_peserta = mysqli_query($db, $peserta);

      // var_dump($edit_pasien);
      // die;

      if ($konfirmasi) {
        header('Location: ../admin/index.php?hal=data_peserta');
      } else {
        header('Location: ../admin/index.php?hal=data_peserta');
      }
    };


    if (isset($_GET["hapus_peserta"])) {

      // var_dump($_GET);
      // die;

      $id_peserta = $_GET['id_peserta'];

      $qf = mysqli_query($db, "SELECT * FROM peserta WHERE id_peserta = $id_peserta");
      $f = mysqli_fetch_assoc($qf);
      $foto = $f['pass_foto'];

      if (isset($id_peserta)) {

      $location = "../upload/foto_peserta/";

      unlink($location.$foto);
      
      $peserta = "DELETE FROM peserta  WHERE id_peserta = $id_peserta";
      $hapus_peserta = mysqli_query($db, $peserta);
    
      if ($query_hapus) {
        header('Location: ../admin/index.php?hal=pendaftaran');
      } else {
        header('Location: ../admin/index.php?hal=pendaftaran');
      }
    }
    };


function passFoto()
{

  $pass_foto = $_FILES['pass_foto']['name'];
  $tmp1   = $_FILES['pass_foto']['tmp_name'];
  $nim = $_POST['nim'];
  // $id_barang = $_POST['id_barang'];


  $ekstensi = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $pass_foto);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensi)) {
    echo "
          <script>
              alert ('bukan gambar')
          </script>
      ";
  }

  $foto = 'pass_foto_';
  $foto .= $nim;
  $foto .= '.';
  $foto .= $ekstensiGambar;


  $location = "../upload/foto_peserta/";


  move_uploaded_file($tmp1, $location . $foto);

  return $foto;
}



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