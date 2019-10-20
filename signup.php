<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="masuk">
        <center>
            <h1>Form Sign Up</h1>
        </center>
        <form action="buat.php" method="post" required>
            <label for="nama" class="label">Masukkan nama lengkap</label>
            <br>
            <input type="text" name="nama" id="nama" placeholder="Nama lengkap" class="isi" required>
            <label for="level" class="label">Pilih level</label>
            <select name="level" id="" class="option" required>
                <option value="">Level</option>
                <option value="admin">Admin</option>
                <option value="pegawai">Pegawai</option>
            </select>
            <br>
            <label for="username" class="label">Buat Username baru</label>
            <br>
            <input type="text" name="username" id="username" placeholder="username" class="isi" required>
            <label for="level"></label>
            <br>
            <label for="Password" class="label">Buat Password baru</label>
            <br>
            <input type="password" name="password" id="password" placeholder="password" class="isi" required>
            <br>
            <input type="submit" value="Buat" class="tombol1">
        </form>
        <button class="tombol2" value="go back" onclick="history.back()">Kembali</button>
    </div>
</body>

</html>