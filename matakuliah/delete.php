<?php
    include '../connect.php';

    $id_dosen = $_GET['id_dosen'];
    $query = "DELETE FROM matakuliah WHERE kode = '$kode'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if($num > 0) {
        echo "Berhasil hapus data <br>";
    } else {
        echo "Gagal hapus data <br>";
    }
    echo "<a href='read.php'>Lihat Data</a>";
?>