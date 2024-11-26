<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SELAMAT DATANG ANGGOTA</h2>

    
    <a href="tambah.php">+ TAMBAH PEMINJAM</a>
	<br/>
	<br/>
	<table border="1">
		<tr>

			<th>id</th>
			<th>buku</th>
			<th>kode_buku</th>
			<th>nama_peminjam</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from peminjaman ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>

				<td><?php echo $no++; ?></td>
				<td><?php echo $d['buku']; ?></td>  
				<td><?php echo $d['kode_buku']; ?></td>
				<td><?php echo $d['nama_peminjam']; ?></td>
			
				<td>

					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>