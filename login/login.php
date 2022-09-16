<?php
    session_start();
    include '../connect.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if($username == "" || $password == "") {
        header("location: form-lohin.php");
    } else {
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        echo $query;
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result);

        if($num == 1) {
            header ("location: ../dosen/read.php");
            $_SESSION['user'] = $username;
        } else {
            header ("location: form-login.php");
        }
    }
?>