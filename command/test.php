<?php 
include("../connection.php");

session_start();

require '../connection.php';

// var_dump($_POST['status']);
// var_dump($_POST['kelamin']);
// var_dump($_GET);
// die;
// 

// echo($_POST['nama']);
// echo($_POST['umur']);
// echo($_POST['1']);

if (isset($_POST['test'])) {

$nama = $_POST['nama'];
$_SESSION['nama'] = $nama;

$umur = $_POST['umur'];
$_SESSION['umur'] = $umur;

$kelamin = $_POST['kelamin'];
$_SESSION['kelamin'] = $kelamin;

$status = $_POST['status'];
$_SESSION['kawin'] = $status;

// echo $kelamin;
// echo $status;
// echo $_SESSION['kawin'];
// die;

$asakit = $_POST['sakit'];
$sakit = $asakit['1']['0'];
$_SESSION['sakit'] = $sakit;

$anyeri = $_POST['nyeri'];
$nyeri = $anyeri['1']['0'];
$_SESSION['nyeri'] = $nyeri;

$aolahraga = $_POST['olahraga'];
$olahraga = $aolahraga['1']['0'];
$_SESSION['olahraga'] = $olahraga;

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


// echo "sakit : $sakit ";
// echo "nyeri : $nyeri ";
// echo "olahraga : $olahraga ";
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


$diagnosa = ($sakit+$nyeri+$olahraga+$daging+$gorengan+$fastfood+$mie+$kopi+$asin+$buah+$sayur+$insom+$tidur+$rokok+$alkohol+$keturunan);
// echo "Hasilnya : $hasil";

echo "diagnosanya cuy :$diagnosa  ";

if ($diagnosa > 10) {
    // echo "ko hipertensi";
    // echo $nama;
    // echo $umur;
    // echo $kelamin;
    // echo $pernikahan;

    // die;
    echo "<script>
    window.location='../pages/index.php?cek=true';
    </script>";
} elseif ($diagnosa < 10 || $diagnosa == 10) {
    // echo "ko aman";
    // echo $nama;
    // echo $umur;
    // echo $kelamin;
    // echo $pernikahan;

    // die;
    echo "<script>
    window.location='../pages/index.php?cek=false';
    </script>";

    // echo "<script>window.location='../index.php?hal=detail_product'; window.alert('Untuk Pemesanan Kamu Harus Punya Akun Dulu');</script>";
    
}


}

// presentase questionernya gak imbang 
// 13 : 3

// die;


?>