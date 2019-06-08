<?php
include 'includes/koneksi.php';
mysqli_query($dbc,"INSERT INTO kopi (nama,hargakopi,stok) VALUES( '$_POST[nama]','$_POST[harga]','0')");
echo "<script language='javascript'>alert('Data Berhasil Disimpan');
document.location='jeniskopi.php';
</script>";
?>