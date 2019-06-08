<?php
include 'includes/koneksi.php';
$id = $_GET['id'];
mysqli_query($dbc,"DELETE FROM kopi WHERE idkopi = $id");
echo "<script language='javascript'>alert('Kopi Berhasil Dihapus');
document.location='jeniskopi.php';
</script>";
?>