<?php  
	include 'Koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="Customer.php">Data Customer</a></li>
			<li><a href="Pemilik.php">Data Pemilik</a></li>
			<li><a href="Property.php">Data Property</a></li>
			<li><a href="#" style="color: blue;">Data Transaksi</a></li>
		</ul>
	</div>
	<div class="content">
		<hr>
		<h1 align="center">PROGRAM UJIAN LABOR PHP TIPE B</h1>
		<h2 align="center">DATA TRANSAKSI</h2>

		<table align="center" width="90%" border="1">
			<tr align="center">
				<td colspan="4"><a class="tambah" href="Add_Transaksi.php">Tambah Transaksi</a></td>
				<td colspan="4"><a class="tambah" href="Cetak_Transaksi.php">Cetak Transaksi</a></td>
			</tr>
			<tr>
				<th>No</th>
				<th>ID Customer</th>
				<th>ID Property</th>
				<th>Tgl Mulai</th>
				<th>Tgl Selesai</th>
				<th>Lama Cicilan</th>
				<th>Bunga Cicilan</th>
				<th>Jumlah Bayar</th>
			</tr>
			<?php  
				$i = 1;
				$sql = mysqli_query($conn, "SELECT * FROM Transaksi ORDER BY Id_Cust");
				while($row = mysqli_fetch_array($sql))
				{
			?>
			<tr align="center">
				<td><?= $i++; ?></td>
				<td><?= $row['Id_Cust']; ?></td>
				<td><?= $row['Id_Property']; ?></td>
				<td><?= $row['Tgl_Mulai']; ?></td>
				<td><?= $row['Tgl_Selesai']; ?></td>
				<td><?= $row['Lama_Cicilan']; ?></td>
				<td><?= $row['Bunga_Cicilan']; ?></td>
				<td><?= $row['Jml_Bayar']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>