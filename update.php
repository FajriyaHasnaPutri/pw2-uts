<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$Merk_Laptop = $_POST['Merk_Laptop'];
$Seri_Laptop = $_POST['Seri_Laptop'];
$Tahun_Produksi = $_POST['Tahun_Produksi'];
 
// update data ke database
mysqli_query($koneksi,"update data_laptop set tanggal='$tanggal', Merk_Laptop='$Merk_Laptop', Seri_Laptop='$Seri_Laptop', Tahun_Produksi='$Tahun_Produksi' where id='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>