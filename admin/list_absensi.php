<?php

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai tanggal yang dikirim
    if (isset($_POST['tanggal'])) {
        $tanggal = $_POST['tanggal'];
        
        // Mengembalikan tanggal yang dipilih dalam format yang diinginkan
        echo $tanggal; // Mengirimkan respons kembali ke JavaScript
        
    }
}