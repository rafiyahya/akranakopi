<?php
include 'includes/koneksi.php';
$id = $_POST['idkopi'];
$stoklama = $_POST['stoklama'];
$stok = $_POST['stok'];
$stokbaru = $stok + $stoklama;
mysqli_query($dbc,"UPDATE kopi SET stok=$stokbaru WHERE idkopi = $id");
echo "<script language='javascript'>alert('Stok berhasil ditambahkan');
document.location='jeniskopi.php';
</script>";
?>