<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Produk</title>
    <link rel="stylesheet" href="pembelian.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="cancel"><a href="home.php"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a></div>

        <br><br><br>
        <center><h1 id="topik">Beli Produk</h1></center><br>

        <div class="form">
    <form action="konfirmasi.php" method="post">
        <label id="label1">Nama Produk :</label><br>
        <input type="hidden" name="id_produk">
        <select name="nama_produk" id="namaproduk">
        <option></option>
        
        <?php 
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "select * from tb_produk");
        while($d = mysqli_fetch_array($data)){
            echo '<option value="' . $d['nama_produk'] . '">' . $d['nama_produk'] . '</option>';
        }
        ?>
        </select><br><br><br>

        <label id="label2">Kuantitas :</label><br>
        <input type="number" name="kuantitas" id="kuantitas"><br><br>

        <button type="submit" name="submit" id="tombol">Tambah</button>
    </form>
        </div>

        <h3 id="error">
            <?php 
                if(isset($_GET['error'])) {
                    if($_GET['error'] == "stoktidakcukup") {
                        echo "Stok Tidak Cukup!";
                    }
                    else if(isset($_GET['error'])) {
                        if($_GET['error'] == "emptyinput") {
                            echo "Isi Semua Bagian!";
                        }
                    }
                }
            ?>
        </h3>
    </div>


    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>
    
</body>
</html>