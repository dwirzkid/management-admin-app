<?php
include("service/koneksidb.php");
session_start();


if (isset($_SESSION["is_login"])) {
    header("location: page/component/sidebar/beranda.php");
}

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql1 = "SELECT * FROM us WHERE username='$username' AND password='$password' ";
    $result1 =  $db->query($sql1);

    if ($result1->num_rows > 0) {
        $data = $result1->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;
        header("location: page/component/sidebar/beranda.php");
        exit;
    } else {
        $_SESSION["error"] = true; //errorlogin
        header("location: index.php");
        exit;
    }
}
