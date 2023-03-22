<?php 
	include 'Koneksi.php';
?>
<body onload="window.print();">
	<div class="content">
		<h1 align="center">LAPORAN DATA TRANSAKSI</h1>
		<hr>
		<table align="center" width="90%" border="1">
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