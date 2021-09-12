<?php
$conn=mysqli_connect ('localhost','root','','belajar_laravel');
if (mysqli_connect_error()) {
    printf("Koneksi ke database gagal", mysqli_connect_error());
    exit();
}
?>