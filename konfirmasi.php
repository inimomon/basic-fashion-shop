<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Produk</title>
    <link rel="stylesheet" href="konfirmasi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="cancel"><a href="home.php"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a></div>

        <br><br><br>
        <center><h1 id="topik">Konfirmasi Produk</h1></center><br>

        <div class="form">
    <form action="tambah_pembelian.php" method="POST">
        <?php 
            include 'koneksi.php';
            $id_produk = $_POST['id_produk'];
            $nama_produk = $_POST['nama_produk'];
            $kuantitas = $_POST['kuantitas'];
            $harga = mysqli_query($koneksi, "select * from tb_produk where nama_produk='$nama_produk'");
            $row = mysqli_fetch_array($harga);
            $total = $row['harga'] * $kuantitas;
        ?>

        <input type="hidden" name="id_produk">
        <label id="label1">Produk :</label>
        <input type="text" id="produk" name="nama_produk" value="<?php echo $nama_produk ?>"><br>

        <label id="label2">Kuantitas :</label>
        <input type="text" id="kuantitas" name="kuantitas" value="<?php echo $kuantitas ?>"><br>

        <label id="label3">Total :</label>
        <input type="number" id="total" name="total_harga" value="<?php echo $total ?>" readonly><br>

        <br>
        <button type="submit" id="tombol">Beli</button>
    </form> 
        </div>
    </div>


    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>
    
</body>
</html>