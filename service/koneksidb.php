<?php
$host = "localhost";
$user = "root";
$pass = "";
$database_name = "tkpembina";

$db = mysqli_connect($host, $user, $pass, $database_name);
// cek Koneksi
if (!$db) {
    echo "Koneksi database error";
    die("Tidak Terkoneksi dengan Database");
} 
// else {
//     echo "koneksi berhasil";
// }
