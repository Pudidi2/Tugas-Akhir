<?php
require 'function.php';



$siswa = query("SELECT * FROM siswa ");

if( isset($_POST["cari"])) {
    $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Halaman Admin</title>
    
</head>
<body>
    
    <h1 class="text-center">Daftar Siswa</h1>

    <a href="tambah.php" font-family="fantasy">Tambah data siswa</a>
    <br><br>

    <form class="d-flex col-md-6 offset-md-3 mb-5" action="" method="post">
        <input type="text" name="keyword" size="40" autofocus
        placeholder="masukkan keyword pencarian.." autocomplete="off" class="form-control me-5">
        <button type="submit" name="cari" class="btn btn-secondary">Cari!</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" class="table table-dark table-striped">

    
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>

    <?php foreach( $siswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50" height="50"></td>
        <td><?= $row["nis"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>



    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>