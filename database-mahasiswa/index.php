<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>


    <a href="tambah.php">Tambah Data Mahasiswa</a>

    <br> <br>

    <form action="search.php" method="get">
        <input type="text" placeholder="masukkan keyword pencarian" name="search" autocomplete="off">
        <input type="submit" value="Search" name="search">
    </form>


    <br> <br>

    <table border="black">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <!-- penginputan menggunakan PHP -->
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <tr>
                <td>
                    <php=>
                        </php>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>