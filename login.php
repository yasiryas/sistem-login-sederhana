<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($config, "SELECT * FROM user WHERE username='$username' AND password='$password'") or die(mysql_connect_error());
$cek = mysqli_num_rows($login);


if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:admin/index.php");
    } else if ($data['level'] == "pegawai") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pegawai";
        header("location:pegawai/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
