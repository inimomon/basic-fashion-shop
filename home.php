<?php 
    SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION PPLG</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Monomaniac+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
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

            <div class="profile">
            <a href="profile.php"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <img src="img/webgif.gif">

        <div class="kanan">
            <h1 id="title">Selamat Datang, <?php echo $_SESSION['user_aktif']; ?></h1><br>

            <br>
            <a href="produk.php" id="tombol"><h5>Lihat Produk</h5></a>
            <a href="pembelian.php" id="tombol"><h5>Beli Sekarang</h5></a>
        </div>
    </div>
    

    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>
</body>
</html>