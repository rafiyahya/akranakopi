<?php
include 'includes/koneksi.php';
date_default_timezone_set('Asia/Singapore');
$waktu = date('Y-m-d h:i:s');
$idkopi = $_POST['idkopi'];
$stok = $_POST['stok'];
$jumlah = $_POST['jumlah'];
$stokbaru = $stok - $jumlah;

if ($jumlah>$stok){
	echo "<script language='javascript'>
			alert('Stok Tidak Mencukupi');
			document.location='transaksi.php';
		  </script>";
} else {
	mysqli_query($dbc,"UPDATE kopi SET stok='$stokbaru' WHERE idkopi = $idkopi ");
	mysqli_query($dbc,"INSERT INTO `transaksi`(`idkopi`, `jumlah`, `harga`, `total`, `uang`, `kembalian`, `waktu`) VALUES ($_POST[idkopi],$_POST[jumlah],$_POST[harga],$_POST[total],$_POST[uang],$_POST[kembalian],'$waktu')");
	echo "<script language='javascript'>alert('Transaksi Berhasil');
			document.location='transaksi.php';
		  </script>";
}


?>