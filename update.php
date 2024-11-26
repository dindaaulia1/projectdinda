<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$buku = $_POST['buku'];
$kode_buku = $_POST['kode_buku'];
 $_POST['nama_pemi$nama_peminjam =njam'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE peminjaman SET buku='$buku', kode_buku='$kode_buku', nama_peminjam='$nama_peminjam' where id ='$id'");

// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
?>
