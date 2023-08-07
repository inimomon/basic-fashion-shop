<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="cancel"><a href="produk.php"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a></div>

        <br><br><br>
        <center><h1 id="topik">Edit Produk</h1></center><br>

        <?php 
        include 'koneksi.php';

        $id_produk = $_GET['id_produk'];

        $data = mysqli_query($koneksi,"select * from tb_produk where id_produk='$id_produk'");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <div class="form">
            <form action="update.php" method="POST">
                <input type="hidden" id="idproduk" name="id_produk" placeholder="ID Produk" value="<?php echo $d['id_produk']; ?>"><br><br><br>
                <input type="text" id="namaproduk" name="nama_produk" placeholder="Nama Produk" value="<?php echo $d['nama_produk']; ?>"><br><br><br>
                <input type="number" id="hargaproduk" name="harga" placeholder="Harga Produk" value="<?php echo $d['harga']; ?>"><br><br><br>
                <input type="number" id="stokproduk" name="stok" placeholder="Stok Produk" value="<?php echo $d['stok']; ?>"><br><br><br>
                <button type="submit" id="tombol">Tambah</button>
            </form>
        </div>
        <?php
        }
        ?>

    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>
    
</body>
</html>