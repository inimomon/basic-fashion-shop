<?php 
$koneksi = mysqli_connect("localhost", "root", "", "fashion-pplg");

if(mysqli_connect_errno()) {
    echo "Koneksi gagal :" .mysqli_connect_error(); 
}
?>
