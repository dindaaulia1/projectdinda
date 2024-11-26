<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman anggota</title>

</head>
<body>
    <h2>edit data</h2>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data1 = mysqli_query($koneksi,"SELECT * FROM peminjaman WHERE id = '$id'");
    while($d =mysqli_fetch_array($data1)){
    ?>
    <form action="update.php" method="post">
    <table>
    <tr>
         <td>Id</td>
         <td><input type="text" name="id" value="<?php echo $d['id'];?>"></td>
    </tr>
    <tr>
        <td>buku</td>
        <td><input type="text" name="buku" value="<?php echo $d['buku'];?>"></td>
    </tr>
    <tr>
        <td>kode_buku</td>
        <td><input type="text" name="kode_buku" value="<?php echo $d['kode_buku'];?>"></td>
    </tr>
    <tr>
        <td>nama_peminjam</td>
        <td><input type="text" name="nama_peminjam" value="<?php echo $d['nama_peminjam'];?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan"></td>
    </tr>
    <?php
    }
    ?>

</table>
</body>
</html>
    