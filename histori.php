<?php
include 'koneksi.php';

$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM tb_pembelian INNER JOIN tb_produk ON tb_pembelian.id_produk = tb_produk.id_produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pembelian</title>
    <link rel="stylesheet" href="histori.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Monomaniac+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <div class="navbar">

            <h1 id="logo">FASHION</h1>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="pembelian.php">Pembelian</a></li>
                <li><a href="histori.php">History</a></li>
            </ul>

            <!-- <div class="profile">
            <a href="profile.png"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a>
            </div> -->
        </div>
    </nav>

    <div class="container">
        <div class="header">
        <br>
        <center><h2 id="text" style="color: white;">Histori Pembelian</h2></center>
    <table class="table table-bordered">
        <tr>
            <td>No</td>
            <td>Produk</td>
            <td>Kuantitas</td>
            <td>Total</td>
            <td>Tanggal</td>
        </tr>

        <?php while ($d = mysqli_fetch_array($data)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_produk']; ?></td>
            <td><?php echo $d['kuantitas']; ?></td>
            <td><?php echo $d['total_harga']; ?></td>
            <td><?php echo $d['tanggal']; ?> </td>
        </tr>
        <?php } ?>
    </table><br>
        </div>
    </div>
</body>
</html>
