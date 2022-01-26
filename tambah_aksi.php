<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$no_peserta = $_POST['no_peserta'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($no_peserta) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into peserta values('','$nama','$no_peserta','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>