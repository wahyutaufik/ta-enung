<?php
// echo "<pre>";
// print_r($_POST);
// exit;
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

$query = "INSERT INTO admin (id_admin, username, password, nama)
	VALUES(NULL,'$username','$password','$nama')";
mysql_query($query);
mysql_close();
echo"<script>alert('Data Berhasil Ditambah');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-admin&message=success'>";
