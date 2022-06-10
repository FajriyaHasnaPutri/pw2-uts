<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$Merk_Laptop = $_POST['Merk_Laptop'];
$Seri_Laptop = $_POST['Seri_Laptop'];
$Tahun_Produksi = $_POST['Tahun_Produksi'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into data_laptop values('', '$tanggal','$Merk_Laptop','$Seri_Laptop','$Tahun_Produksi')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>