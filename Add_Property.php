<?php  
	include 'Koneksi.php';

	if(isset($_POST['simpan']))
	{
		if($_POST['Type_Property']=="A36")
		{
			$Harga = "276000000";
		} else if($_POST['Type_Property']=="A46")
			{
				$Harga = "356000000";
			} else if($_POST['Type_Property']=="A76")
				{
					$Harga = "732000000";
				} else 
					{
						$Harga = "946000000";
					}

		$sql = mysqli_query($conn, "INSERT INTO property(Id_Property,Id_Pmlk,Type_Property,Harga) VALUES ('$_POST[Id_Property]','$_POST[Id_Pmlk]','$_POST[Type_Property]','$Harga')");

		if($sql)
		{
			echo "<script>alert('Data Berhasil Tersimpan !');window.location.href='Property.php';</script>";
		} else {
			echo "<script>alert('Data Gagal Tersimpan !');window.location.href='Add_Property.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Property</title>
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
		<h2 align="center">INPUT DATA PROPERTY</h2>
	<form action="" method="post">
		<table align="center" width="90%" border="1">
			<tr align="center">
				<td width="30%">ID Property</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="Id_Property" class="form-control" placeholder="Masukkan ID Property" required="" autocomplete="off" maxlength="4"></td>
			</tr>
			<tr align="center">
				<td width="30%">ID Pemilik</td>
				<td width="10%">:</td>
				<td width="50%">
					<select name="Id_Pmlk" class="form-select">
						<option disabled="">Pilih Pemilik</option>
						<?php 
							$sql = mysqli_query($conn, "SELECT * FROM pemilik");
							while($row = mysqli_fetch_array($sql))
							{
						?>
							<option value="<?= $row['Id_Pmlk']; ?>"><?= $row['Nm_Pmlk']; ?></option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Type Propery</td>
				<td width="10%">:</td>
				<td width="50%">
					<select name="Type_Property" class="form-select">
						<option disabled="">Pilih Type</option>
						<option value="A36">A36</option>
						<option value="A46">A46</option>
						<option value="A76">A76</option>
						<option value="A90">A90</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><button type="submit" name="simpan" class="btn">SIMPAN</button></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>