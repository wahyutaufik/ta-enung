<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "ferani_baby_shop";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal ".mysql_error());
mysql_select_db($database) or die("Database tidak bisa dibuka ".mysql_error());
?>
