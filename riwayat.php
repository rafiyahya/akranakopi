</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
	<div class="container">
		<div class="card">
	<h2>Riwayat Transaksi</h2><hr>
	<table>
		<thead>
			<tr>
				<th>Waktu</th>
				<th>Jenis Kopi</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Total</th>
				<th>Uang</th>
				<th>Kembalian</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$tampil=mysqli_query($dbc,"Select * from transaksi inner join kopi on transaksi.idkopi = kopi.idkopi order by waktu desc");
    	while($row=mysqli_fetch_array($tampil)){
  		?>
			<tr>
				<td><?php echo $row['waktu']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['jumlah']; ?></td>
				<td>Rp.<?php echo $row['harga']; ?></td>
				<td>Rp.<?php echo $row['total']; ?></td>
				<td>Rp.<?php echo $row['uang']; ?></td>
				<td>Rp.<?php echo $row['kembalian']; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
		</div>
	</div>
</body>
</html>