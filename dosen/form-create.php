<?php
include '../login/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create</title>
</head>
<body>
    <h1>Tambah Data Dosen</h1>
    <form action= "create.php" method="post">
        Nama Dosen : <input type="text" name="nama_dosen"><br>
        No Telepon : <input type="text" name="telp"><br>
        <input type="submit" value="simpan" name="btnSimpan">
    </form>
</body>
</html>