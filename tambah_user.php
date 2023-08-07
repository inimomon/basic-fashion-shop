<?php
    include 'koneksi.php';

    $nama = $_POST['nama_user'];
    $email = $_POST['email_user'];
    $password = $_POST['password_user'];



    function emptyInputSignup($nama, $email, $password) {
        $result;
        if(empty($nama) || empty($email) || empty($password)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    if(emptyInputSignup($nama, $email, $password) !== false) {
        header("location:index.php?error=emptyinput");
        exit();
    } else {
        mysqli_query($koneksi, "INSERT INTO tb_user VALUES('','$email','$password','$nama')");

        header("location:login.php");
    }

?>