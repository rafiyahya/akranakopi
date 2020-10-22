</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
	<div class="container">
		<div class="card">
			<h2>Tambah Jenis Kopi</h2><hr>
			<form action="tambahkopi.php" method="POST">

				<label>Nama Kopi : </label>
				<input type="text" name="nama" placeholder="Masukkan Nama Kopi" required><br>
				<label>Harga : </label>
				<input type="text" name="harga" placeholder="Masukkan Harga Kopi" required><br>
				<div class="card-button">
				<input type="submit" name="submit" value="Simpan" class="simpan">
				<input type="reset" name="reset" value="Reset" class="reset">
				<!-- <button type="button" onclick="history.back(-1)" class=" btn btn-sm btn-secondary text-light mb-1">Batal</button> -->
				</div>
			</form>
		</div>
	<div class="card">
	<h2>Jenis Kopi</h2><hr>
	<table>
		<thead>
			<tr>
				<th>Jenis Kopi</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$tampil=mysqli_query($dbc,"SELECT * FROM kopi");
    	while($row=mysqli_fetch_array($tampil)){
  		?>
			<tr>
				<td><?php echo $row['nama']; ?></td>
				<td>Rp.<?php echo $row['hargakopi']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td>
					<a href="<?php echo 'tambahstok.php?id='.$row['idkopi']; ?>" >Tambah Stok</a>
					<a href="<?php echo 'editkopi.php?id='.$row['idkopi']; ?>" >Edit</a>
					<a href="<?php echo 'hapuskopi.php?id='.$row['idkopi']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
	</div>
</body>
</html>