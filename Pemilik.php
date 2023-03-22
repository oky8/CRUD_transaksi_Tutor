<?php  
	include 'Koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pemilik</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="Customer.php">Data Customer</a></li>
			<li><a href="#" style="color: blue;">Data Pemilik</a></li>
			<li><a href="Property.php">Data Property</a></li>
			<li><a href="Transaksi.php">Data Transaksi</a></li>
		</ul>
	</div>
	<div class="content">
		<hr>
		<h1 align="center">PROGRAM UJIAN LABOR PHP TIPE B</h1>
		<h2 align="center">DATA PEMILIK</h2>

		<table align="center" width="90%" border="1">
			<tr align="center">
				<td colspan="3"><a class="tambah" href="Add_Pemilik.php">Tambah Pemilik</a></td>
			</tr>
			<tr align="center">
				<th>No</th>
				<th>ID Pemilik</th>
				<th>Nama Pemilik</th>
			</tr>
			<?php  
				$i = 1;
				$sql = mysqli_query($conn, "SELECT * FROM pemilik ORDER BY Id_Pmlk");
				while($row = mysqli_fetch_array($sql))
				{
			?>
			<tr align="center">
				<td><?= $i++; ?></td>
				<td><?= $row['Id_Pmlk']; ?></td>
				<td><?= $row['Nm_Pmlk']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>