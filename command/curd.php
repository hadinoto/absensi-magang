<?php
include("../connection.php");

session_start();

  // var_dump($_POST);
  // die;


// INSTITUSI
if (isset($_POST["tambah_institusi"])) {

  $nama_institusi = $_POST['nama_institusi'];
  $idInstitusi = KodeOtomatis($db, 'institusi', 'id_institusi', '', '', '');

  $institusi = "INSERT INTO institusi VALUES ('$idInstitusi','$nama_institusi')";
  $query_institusi = mysqli_query($db, $institusi);

  // var_dump($_query_institusi);
  // die;

  if ($query_institusi) {
    header('Location: ../admin/index.php?hal=data_institusi');
  } else {
    header('Location: ../admin/index.php?hal=data_institusi');
  }
};

if (isset($_POST["edit_institusi"])) {

  // var_dump($_POST);
  // die;

  $id_institusi = $_POST['id_institusi'];
  $nama_institusi = $_POST['nama_institusi'];


  // $idDokter = KodeOtomatis($db, 'dokter', 'id_dokter', '', '', '');

  $edit = "UPDATE institusi SET nama_institusi='$nama_institusi' WHERE id_institusi='$id_institusi'";
  $query_edit = mysqli_query($db, $edit);

  // var_dump($query_edit);
  // die;

  if ($query_edit) {
    header('Location: ../admin/index.php?hal=data_institusi');
  } else {
    header('Location: ../admin/index.php?hal=data_institusi');
  }
};

if (isset($_GET["hapus_institusi"])) {

  $id_institusi= $_GET['id_institusi'];

  $hapus = "DELETE FROM institusi WHERE id_institusi = $id_institusi";
  $query_hapus = mysqli_query($db, $hapus);

  if ($query_hapus) {
    header('Location: ../admin/index.php?hal=data_institusi');
  } else {
    header('Location: ../admin/index.php?hal=data_institusi');
  }
};




// JURUSAN
if (isset($_POST["tambah_jurusan"])) {


  $nama_jurusan = $_POST['nama_jurusan'];
  $id_institusi = $_POST['id_institusi'];
  $idJurusan = KodeOtomatis($db, 'jurusan', 'id_jurusan', '', '', '');

  $jurusan = "INSERT INTO jurusan VALUES ('$idJurusan', '$id_institusi', '$nama_jurusan')";
  $query_jurusan = mysqli_query($db, $jurusan);


  if ($query_jurusan) {
    header('Location: ../admin/index.php?hal=data_jurusan');
  } else {
    header('Location: ../admin/index.php?hal=data_jurusan');
  }
};

if (isset($_POST["edit_jurusan"])) {

  // var_dump($_POST);
  // die;

  $id_jurusan = $_POST['id_jurusan'];
  $nama_jurusan = $_POST['nama_jurusan'];


  // $idDokter = KodeOtomatis($db, 'dokter', 'id_dokter', '', '', '');

  $edit = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'";
  $query_edit = mysqli_query($db, $edit);

  // var_dump($query_edit);
  // die;

  if ($query_edit) {
    header('Location: ../admin/index.php?hal=data_jurusan');
  } else {
    header('Location: ../admin/index.php?hal=data_jurusan');
  }
};

if (isset($_GET["hapus_jurusan"])) {

  $id_jurusan= $_GET['id_jurusan'];

  $hapus = "DELETE FROM jurusan WHERE id_jurusan = $id_jurusan";
  $query_hapus = mysqli_query($db, $hapus);

  if ($query_hapus) {
    header('Location: ../admin/index.php?hal=data_jurusan');
  } else {
    header('Location: ../admin/index.php?hal=data_jurusan');
  }
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

