<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_peserta = $_POST['no_peserta'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update peserta set nama='$nama', no_peserta='$no_peserta', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>