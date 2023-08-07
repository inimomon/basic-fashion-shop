<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamabh Produk</title>
    <link rel="stylesheet" href="tambah.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="cancel"><a href="produk.php"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a></div>

        <br><br><br>
        <center><h1 id="topik">Tambah Produk</h1></center><br>

        <div class="form">
            <form action="tambah_action.php" method="POST">
                <input type="text" id="namaproduk" name="nama_produk" placeholder="Nama Produk"><br><br><br>
                <input type="number" id="hargaproduk" name="harga" placeholder="Harga Produk"><br><br><br>
                <input type="number" id="stokproduk" name="stok" placeholder="Stok Produk"><br><br><br>
                <button type="submit" id="tombol">Tambah</button>
            </form>
        </div>

        <h3 id="error">
            <?php 
                if(isset($_GET['error'])) {
                    if($_GET['error'] == "emptyinput") {
                        echo "Lengkapi Formulir!";
                    }
                }
            ?>
        </h3>
    </div>

    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>
    
</body>
</html>