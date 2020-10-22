</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
	<div class="container">
		<div class="card">	
	<h2>Transaksi</h2><hr>
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
		Nama Kopi : <?php echo $row['nama'] ?>
		<input type="hidden" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br>
		Jumlah : <?php echo $jumlah ?>
		<input type="hidden" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>"><br>
		Harga : <?php echo "Rp.".$row['hargakopi'] ?>
		<input type="hidden" id="harga" name="harga" value="<?php echo $row['hargakopi']; ?>"><br>
		Total : <?php echo "Rp.".$total ?>
		<input type="hidden" id="total" name="total" value="<?php echo $total; ?>"><br>
		Uang : <?php echo "Rp.".$uang ?>
		<input type="hidden" id="uang" name="uang" value="<?php echo $uang; ?>"><br>
		<strong>Kembalian : <?php echo "Rp.".$kembalian ?></strong>
		<input type="hidden" id="kembalian" name="kembalian" value="<?php echo $kembalian; ?>"><br>
		<input type="hidden" id="stok" name="stok" value="<?php echo $row['stok']; ?>">
		<?php } ?>
		<div class="card-button">	
		<input class="simpan" type="submit" name="submit" value="Proses">
		<input class="reset" type="reset" value="Kembali" onclick="history.back(-1)">
		</div>
	</form>
			</div>
	</div>
</body>
</html>