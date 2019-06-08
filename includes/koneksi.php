<?php
session_start();
$dbc = mysqli_connect('localhost','root','','akrana_coffee');

if(!$dbc){
	die($dbc);
}
?>