<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD dan PHP</title>
</head>
<body>
    <h2>crud data</h2>
    <br/>
    <a href="index.html">kembali</a>
    <h3>tambah data </3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>id</td>
                <td><input type ="text" name="id"></td>
            </tr>
            <tr>
                <td>buku</td>
                <td><input type ="text" name="buku"></td>
            </tr>
            <tr>
                <td>kode_buku</td>
                <td><input type ="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>nama_peminjaman</td>
                <td><input type ="text" name="nama_peminjam"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
                
            </tr>
        </table>
    </form>
</body>
</html>