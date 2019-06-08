</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
	<div class="container">
	<h2>Tambah Stok Kopi</h2>
	<form action="updatestok.php" method="POST">
		<?php $id = $_GET['id'];?>
		<?php
		$tampil=mysqli_query($dbc,"SELECT * FROM kopi WHERE idkopi = $id");
    	while($row=mysqli_fetch_array($tampil)){
    	?>
		<input type="hidden" name="idkopi" value="<?php echo $id ?>">
		<label>Nama Kopi : </label>
		<div class="kolom">
		<input type="text" name="nama" placeholder="Masukkan Nama Kopi" value="<?php echo $row['nama']; ?>" readonly><br>
		</div>
		<label>Stok : </label>
		<div class="kolom">
		<input type="text" name="stok" placeholder="Masukkan Stok" required><br>
		<input type="hidden" name="stoklama" value="<?php echo $row['stok']; ?>">
		</div>
		<input class="simpan" type="submit" name="submit" value="Simpan">
		<input class="reset" type="reset" name="reset" value="Reset">
		<input class="cancel" type="button" value="Kembali" onclick="history.back(-1)">
		<?php } ?>
	</form>
	</div>
</body>
</html>