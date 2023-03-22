<?php  
	include 'Koneksi.php';

	if(isset($_POST['simpan']))
	{
		$sql = mysqli_query($conn, "INSERT INTO customer(Id_Cust,Nm_Cust) VALUES ('$_POST[Id_Cust]','$_POST[Nm_Cust]')");

		if($sql)
		{
			echo "<script>alert('Data Berhasil Tersimpan !');window.location.href='Customer.php';</script>";
		} else {
			echo "<script>alert('Data Gagal Tersimpan !');window.location.href='Add_Customer.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Customer</title>
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
		<h2 align="center">INPUT DATA CUSTOMER</h2>
	<form action="" method="post">
		<table align="center" width="90%" border="1">
			<tr align="center">
				<td width="30%">ID Customer</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="Id_Cust" class="form-control" placeholder="Masukkan ID Customer" required="" autocomplete="off" maxlength="6"></td>
			</tr>
			<tr align="center">
				<td width="30%">Nama Customer</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="Nm_Cust" class="form-control" placeholder="Masukkan Nama Customer" required="" autocomplete="off" maxlength="25"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><button type="submit" name="simpan" class="btn">SIMPAN</button></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>