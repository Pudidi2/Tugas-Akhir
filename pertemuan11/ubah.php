<?php
require 'function.php';

$id = $_GET["id"];

$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

if( isset($_POST["submit"])) {

    if( ubah($_POST) > 0 ) {
        echo "
                <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
                </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>
";
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis" required
                 value="<?= $siswa["nis"]?>">
            </li>
            <li>
            <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $siswa["nama"]?>">
            </li>
            <li>
            <label for="email">Email : </label>
                <input type="email" name="email" id="email"
                value="<?= $siswa["email"]?>">
            </li>
            <li>
            <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?= $siswa["jurusan"]?>">
            </li>
            <li>
            <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar"
                value="<?= $siswa["gambar"]?>">
            </li>
            <li>
               <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>


    </form>
</body>
</html>