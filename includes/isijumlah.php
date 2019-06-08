<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "akrana_coffee";

$connection = mysqli_connect($servername, $username, $password, $dbname);
$jumlah = $_GET['jumlah'];
$query = mysqli_query($connection,"SELECT * FROM kopi where idkopi='$id'");
$kopi = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  $kopi['nama'],
            'stok'      =>  $kopi['stok'],
            'harga'   =>  $kopi['hargakopi']);
 echo json_encode($data);
?>
