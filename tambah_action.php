<?php 
include 'koneksi.php';

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


function emptyInputSignup($nama_produk, $harga, $stok) {
    $result;
    if(empty($nama_produk) || empty($harga) || empty($stok)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

if(emptyInputSignup($nama_produk, $harga, $stok) !== false) {
    header("location:tambah.php?error=emptyinput");
    exit();
}else {

mysqli_query($koneksi, "insert into tb_produk values('$id_produk', '$nama_produk', '$harga', '$stok')");

header("location:produk.php");
}

?>