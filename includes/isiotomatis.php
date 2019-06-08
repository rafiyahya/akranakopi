<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "akrana_coffee";

$connection = mysqli_connect($servername, $username, $password, $dbname);
$nama = $_GET['nama'];
$query = mysqli_query($connection,"SELECT * FROM kopi where nama='$nama'");
$kopi = mysqli_fetch_array($query);
$data = array(
            'idkopi'      =>  $kopi['idkopi'],
            'stok'      =>  $kopi['stok'],
            'harga'   =>  $kopi['hargakopi']);
 echo json_encode($data);
?>
