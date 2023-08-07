<?php 
include 'koneksi.php';

$id_produk = $_GET['id_produk'];

mysqli_query($koneksi, "delete from tb_produk where id_produk='$id_produk'");

header("location:produk.php");

?>