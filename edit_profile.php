<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="cancel"><a href="profile.php"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a></div>

        <br><br><br>
        <center><h1 id="topik">Edit Profile</h1></center><br>

        <?php 
        include 'koneksi.php';

        $id_user = $_GET['id_user'];

        $data = mysqli_query($koneksi,"select * from tb_user where id_user='$id_user'");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <div class="form">
            <form action="update_profile.php" method="POST">
                <input type="hidden" id="idproduk" name="id_user" placeholder="ID Produk" value="<?php echo $d['id_user']; ?>"><br><br><br>
                <input type="text" id="namaproduk" name="nama_user" placeholder="Nama User" value="<?php echo $d['nama_user']; ?>"><br><br><br>
                <input type="text" id="hargaproduk" name="password" placeholder="Password" value="<?php echo $d['password']; ?>"><br><br><br>
                <input type="text" id="stokproduk" name="email" placeholder="Email" value="<?php echo $d['email']; ?>"><br><br><br>
                <button type="submit" id="tombol">Tambah</button>
            </form>
        </div>
        <?php
        }
        ?>

    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>
    
</body>
</html>