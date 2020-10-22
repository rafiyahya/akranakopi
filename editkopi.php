</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
	<div class="container">
		<div class="card">
	<h2>Edit Jenis Kopi</h2><hr>
	<?php $id = $_GET['id'];?>
	<form action="updatekopi.php" method="POST">
		<?php
		$tampil=mysqli_query($dbc,"SELECT * FROM kopi WHERE idkopi = $id");
    	while($row=mysqli_fetch_array($tampil)){
    	?>
		<input type="hidden" name="idkopi" value="<?php echo $id ?>">
		<label>Nama Kopi : </label>
		<div class="kolom">
		<input type="text" name="nama" placeholder="Masukkan Nama Kopi" value="<?php echo $row['nama']; ?>" required><br>
		</div>
		<label>Harga : </label>
		<div class="kolom">
		<input type="text" name="harga" placeholder="Masukkan Harga Kopi" value="<?php echo $row['hargakopi']; ?>" required><br>
		</div>
				<div class="card-button">
		<input class="simpan" type="submit" name="submit" value="Simpan">
		<input class="reset" type="reset" name="reset" value="Reset">
		<input class="cancel" type="button" value="Kembali" onclick="history.back(-1)">
		<?php } ?>
				</div>
	</form>
		</div>
	</div>
</body>
</html>