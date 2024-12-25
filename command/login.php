<?php

session_start();

require '../connection.php';

// var_dump($_POST);
// die;

$username = $_POST["username"];
$password = $_POST["password"];

// echo $username;
// echo $password;
// die;

if (isset($_POST["login"])) {

    $query = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if ($cek > 0) {
        $_SESSION['admin'] = $data["id_admin"];
    };

    if (isset($_SESSION['admin'])) {
        header("location: ../admin/index.php");
    } elseif (!isset($_SESSION['admin'])) {

        $query = mysqli_query($db, "SELECT * FROM peserta WHERE username = '$username' AND password = '$password'");

        $cek = mysqli_num_rows($query);
        $data = mysqli_fetch_assoc($query);

        if ($cek > 0) {
            $_SESSION['peserta'] = $data["id_peserta"];
        };
        
        if (isset($_SESSION['peserta'])) {
            header("location: ../pages/index.php");
        } elseif (!isset($_SESSION['pasien'])) {
            header("location: ../login.php?error=1");
            echo "Gak Masuk Bos";
        };

    };
}
