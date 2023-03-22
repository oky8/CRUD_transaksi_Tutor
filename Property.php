<?php  
	include 'Koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Property</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="Customer.php">Data Customer</a></li>
			<li><a href="Pemilik.php">Data Pemilik</a></li>
			<li><a href="#" style="color: blue;">Data Property</a></li>
			<li><a href="Transaksi.php">Data Transaksi</a></li>
		</ul>
	</div>
	<div class="content">
		<hr>
		<h1 align="center">PROGRAM UJIAN LABOR PHP TIPE B</h1>
		<h2 align="center">DATA PROPERTY</h2>

		<table align="center" width="90%" border="1">
			<tr align="center">
				<td colspan="5"><a class="tambah" href="Add_Property.php">Tambah Property</a></td>
			</tr>
			<tr>
				<th>No</th>
				<th>ID Property</th>
				<th>ID Pemilik</th>
				<th>Type Property</th>
				<th>Harga</th>
			</tr>
			<?php  
				$i = 1;
				$sql = mysqli_query($conn, "SELECT * FROM property ORDER BY Id_Property");
				while($row = mysqli_fetch_array($sql))
				{
			?>
			<tr align="center">
				<td><?= $i++; ?></td>
				<td><?= $row['Id_Property']; ?></td>
				<td><?= $row['Id_Pmlk']; ?></td>
				<td><?= $row['Type_Property']; ?></td>
				<td><?= $row['Harga']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>