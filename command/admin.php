<?php

session_start();

require '../connection.php';

// var_dump($_POST);
// die;

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);


    if ($cek > 0) {
        $_SESSION['login_admin'] = $data["id_admin"];
    };

    if (isset($_SESSION['login_admin'])) {
        header("location: ../admin/index.php");
    } elseif (!isset($_SESSION['login_admin'])) {
        header("location: ../admin/login.php?error=1");
        echo "Gak Masuk Bos";
    };
};