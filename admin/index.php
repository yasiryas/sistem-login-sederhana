<?php
include '../config.php';

session_start();

if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}

echo "Hello " . $_SESSION['username'] . ", Anda login sebagai " . $_SESSION['level'];

?>
<br>
<a href="logout.php">Logout</a>