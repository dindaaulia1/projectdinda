<?php
// koneksi database
include  'koneksi.php';
//menangkap data yang dikirim dari from

$ID = $_POST['id'];
$buku = $_POST['buku'];
$kode_buku = $_POST['kode_buku'];
$nama_peminjam = $_POST['nama_peminjam'];

//menginput data ke database
mysqli_query($koneksi,"insert into peminjaman values('$ID','$buku','$kode_buku','$nama_peminjam')");

//mengalihkan halaman kembali ke index
header("location:anggota.php");
?>