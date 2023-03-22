<?php  
	include 'Koneksi.php';

	if(isset($_POST['simpan']))
	{
		$sql = mysqli_query($conn, "INSERT INTO pemilik(Id_Pmlk,Nm_Pmlk) VALUES ('$_POST[Id_Pmlk]','$_POST[Nm_Pmlk]')");

		if($sql)
		{
			echo "<script>alert('Data Berhasil Tersimpan !');window.location.href='Pemilik.php';</script>";
		} else {
			echo "<script>alert('Data Gagal Tersimpan !');window.location.href='Add_Pemilik.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Pemilik</title>
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
		<h2 align="center">INPUT DATA PEMILIK</h2>
	<form action="" method="post">
		<table align="center" width="90%" border="1">
			<tr align="center">
				<td width="30%">ID Pemilik</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="Id_Pmlk" class="form-control" placeholder="Masukkan ID Pemilik" required="" autocomplete="off" maxlength="5"></td>
			</tr>
			<tr align="center">
				<td width="30%">Nama Pemilik</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="Nm_Pmlk" class="form-control" placeholder="Masukkan Nama Pemilik" required="" autocomplete="off" maxlength="25"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><button type="submit" name="simpan" class="btn">SIMPAN</button></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>