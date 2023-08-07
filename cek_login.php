<?php 
    include 'koneksi.php';
    SESSION_START();

    $tangkap_email = $_POST['email_user'];
    $tangkap_pass = $_POST['password_user'];

    $query = mysqli_query($koneksi, "SELECT nama_user FROM tb_user WHERE email = '$tangkap_email' AND password = '$tangkap_pass' ");

    $baris = mysqli_num_rows($query);

    if($baris == 1){
        $data = mysqli_fetch_array($query);
        $_SESSION['user_aktif'] = $data['nama_user'];

        header("location:home.php");
    }
    else {
        header("location:login.php?error=wrongpw");
        exit();
    }

?>