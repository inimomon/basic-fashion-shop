<?php 
include 'koneksi.php';

$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($koneksi, "UPDATE tb_user SET nama_user='$nama_user', email='$email', password='$password' WHERE id_user='$id_user'");

header("location:profile.php");
?>