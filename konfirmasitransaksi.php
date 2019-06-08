</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
	<div class="container">
	<h2>Transaksi</h2>
	<?php
		  $id = $_POST['idkopi'];
		$tampil=mysqli_query($dbc,"SELECT * FROM kopi WHERE idkopi = $id");
    	while($row=mysqli_fetch_array($tampil)){
		  $jumlah = $_POST['jumlah'];
		  $uang = $_POST['uang'];
		  $total = $jumlah * $_POST['harga'];
		  $kembalian = $uang - $total;
	?>
	<form action="tambahtransaksi.php" method="POST">
		<input type="hidden" id="idkopi" name="idkopi" value="<?php echo $row['idkopi']; ?>"><br>
		<label>Nama Kopi : <?php echo $row['nama'] ?></label>
		<input type="hidden" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br>
		<label>Jumlah : <?php echo $jumlah ?></label>
		<input type="hidden" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>"><br>
		<label>Harga : <?php echo "Rp.".$row['hargakopi'] ?></label>
		<input type="hidden" id="harga" name="harga" value="<?php echo $row['hargakopi']; ?>"><br>
		<label>Total : <?php echo "Rp.".$total ?></label>
		<input type="hidden" id="total" name="total" value="<?php echo $total; ?>"><br>
		<label>Uang : <?php echo "Rp.".$uang ?></label>
		<input type="hidden" id="uang" name="uang" value="<?php echo $uang; ?>"><br>
		<label><strong>Kembalian : <?php echo "Rp.".$kembalian ?></strong></label>
		<input type="hidden" id="kembalian" name="kembalian" value="<?php echo $kembalian; ?>"><br>
		<input type="hidden" id="stok" name="stok" value="<?php echo $row['stok']; ?>">
		<input class="simpan" type="submit" name="submit" value="Proses">
		<input class="reset" type="button" value="Kembali" onclick="history.back(-1)">
		<?php } ?>
	</form>
	</div>
</body>
</html>