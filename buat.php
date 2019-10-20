<?php
session_start();
include 'config.php';

$level = $_POST['level'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($config, "INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES ('', '$nama', '$username', '$password', '$level')");

header("location:index.php?pesan=sukses");
