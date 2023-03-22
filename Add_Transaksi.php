<?php 
	include 'Koneksi.php';

	if(isset($_POST['simpan']))
	{
		$sql1 = mysqli_query($conn, "SELECT * FROM property WHERE Id_Property = '$_POST[Id_Property]'");
		$row1 = mysqli_fetch_array($sql1);

		$Bunga_Cicilan 	= $row1['Harga'] * 0.4;
		$Jml_Bayar 		= ($row1['Harga'] / $_POST['Lama_Cicilan']) + $Bunga_Cicilan;
		$sql = mysqli_query($conn, "INSERT INTO transaksi(Id_Cust,Id_Property,Tgl_Mulai,Tgl_Selesai,Lama_Cicilan,Bunga_Cicilan,Jml_Bayar) VALUES ('$_POST[Id_Cust]','$_POST[Id_Property]','$_POST[Tgl_Mulai]','$_POST[Tgl_Selesai]','$_POST[Lama_Cicilan]','$Bunga_Cicilan','$Jml_Bayar')");

		if($sql)
		{
			echo "<script>alert('Data Berhasil Tersimpan !');window.location.href='Transaksi.php';</script>";
		} else {
			echo "<script>alert('Data Gagal Tersimpan !');window.location.href='Add_Transaksi.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="Customer.php">Data Customer</a></li>
			<li><a href="Pemilik.php">Data Pemilik</a></li>
			<li><a href="Property.php">Data Property</a></li>
			<li><a href="Transaksi.php">Data Transaksi</a></li>
		</ul>
	</div>
	<div class="content">
		<hr>
		<h1 align="center">PROGRAM UJIAN LABOR PHP TIPE B</h1>
		<h2 align="center">INPUT DATA TRANSAKSI</h2>
	<form action="" method="post">
		<table align="center" width="90%" border="1">
			<tr align="center">
				<td width="30%">ID Customer</td>
				<td width="10%">:</td>
				<td width="50%">
					<select name="Id_Cust" class="form-select">
						<option disabled="">Pilih Customer</option>
						<?php 
							$sql = mysqli_query($conn, "SELECT * FROM customer ORDER BY Id_Cust");
							while($row = mysqli_fetch_array($sql))
							{
						?>
							<option value="<?= $row['Id_Cust']; ?>"><?= $row['Nm_Cust']; ?></option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>			<tr align="center">
				<td width="30%">ID Property</td>
				<td width="10%">:</td>
				<td width="50%">
					<select name="Id_Property" class="form-select">
						<option disabled="">Pilih Property</option>
						<?php 
							$sql = mysqli_query($conn, "SELECT * FROM property ORDER BY Id_Property");
							while($row = mysqli_fetch_array($sql))
							{
						?>
							<option value="<?= $row['Id_Property']; ?>"><?= $row['Type_Property']; ?></option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Tanggal Mulai</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="date" name="Tgl_Mulai" class="form-select" required="" autocomplete="off"></td>
			</tr>
			<tr align="center">
				<td width="30%">Tanggal Selesai</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="date" name="Tgl_Selesai" class="form-select" required="" autocomplete="off"></td>
			</tr>
			<tr align="center">
				<td width="30%">Lama Cicilan</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" min="6" max="120" type="number" name="Lama_Cicilan" class="form-select" required="" autocomplete="off"><label class="form-label">Bulan</label></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><button type="submit" name="simpan" class="btn">SIMPAN</button></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>