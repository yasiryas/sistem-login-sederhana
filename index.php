<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="masuk">
        <h2 style="text-align: center;">
            Sign in
        </h2>

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert-gagal'>Username atau password tidak sesuai !</div>";
            } else if ($_GET['pesan'] == "sukses") {
                echo "<div class='alert-sukses'>Berhasil !</div>";
            }
        }
        ?>

        <form action="login.php" method="post" onSubmit="return validasi()">
            <div>
                <label for="" class="label">Masukkan Username</label>
                <input type="text" name="username" id="username" placeholder="username atau email" class="isi"></input>
            </div>
            <div>
                <label for="" class="label">Masukkan password</label>
                <input type="password" name="password" id="password" placeholder="password" class="isi"></input>
            </div>
            <div>
                <input type="submit" value="Login" class="tombol1">
                <input type="button" value="Sign Up" class="tombol2" onclick="window.location.href='signup.php'">
            </div>

        </form>
    </div>
</body>

</html>