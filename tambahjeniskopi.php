</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
	<h2>Tambah Jenis Kopi</h2>
	<form action="aksitambahjeniskopi.php" method="POST">
		<label>Nama Kopi : </label>
		<input type="text" name="nama" placeholder="Masukkan Nama Kopi" required><br>
		<label>Harga : </label>
		<input type="text" name="harga" placeholder="Masukkan Harga Kopi" required><br>
		<input type="submit" name="submit" value="Simpan">
		<input type="reset" name="reset" value="Reset">
		<input type="button" value="Kembali" onclick="history.back(-1)">
		<!-- <button type="button" onclick="history.back(-1)" class=" btn btn-sm btn-secondary text-light mb-1">Batal</button> -->

	</form>
</body>
</html>