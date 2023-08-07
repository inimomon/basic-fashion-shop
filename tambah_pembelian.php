<?php 
include "koneksi.php";

$nama = $_POST['nama_produk'];
$kuantitas = $_POST['kuantitas'];
$total = $_POST['total_harga'];
$tanggal = date("y-m-d");
$stok = mysqli_query($koneksi, "select * from tb_produk WHERE nama_produk = '$nama'");
$dataid = mysqli_fetch_assoc(mysqli_query($koneksi, "select * from tb_produk WHERE nama_produk ='$nama'"));
$id_produk = $dataid['id_produk'];
   
if(mysqli_num_rows($stok) === 1){
       $row = mysqli_fetch_array($stok);
       if($row['stok'] >= $kuantitas){
        mysqli_query($koneksi , "INSERT INTO tb_pembelian VALUES('','$id_produk','$kuantitas','$total','$tanggal')");
        header("location:home.php");
       }else{
        header("location:pembelian.php?error=stoktidakcukup");
        exit();
       }
    }else{
        header("location:pembelian.php?error=stoktidakcukup");
        exit();
    }
?>