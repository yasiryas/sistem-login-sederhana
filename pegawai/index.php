<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pegawai</title>
</head>

<body>
    <?php
    if ($_SESSION['level'] == "") {
        header("location:../index.php?pesan=gagal");
    }
    ?>

    Hallo <?php echo $_SESSION['username']; ?> Anda telah login sebagai <?php echo $_SESSION['level']; ?>
    <br>
    <a href="logout.php">Logout</a>
</body>

</html>