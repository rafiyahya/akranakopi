<?php
include 'includes/koneksi.php';
$idkopi = $_POST['idkopi'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
mysqli_query($dbc,"UPDATE kopi SET nama='$nama',hargakopi='$harga' WHERE idkopi = $idkopi ");
echo "<script language='javascript'>alert('Kopi Berhasil Diupdate');
document.location='jeniskopi.php';
</script>";
?>