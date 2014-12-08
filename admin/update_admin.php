<?php
$id_admin = $_GET['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama     = $_POST['nama'];

$query = "UPDATE admin 
		  SET id_admin = '$id_admin',
		      username = '$username',
		      password = '$password',
		      nama = '$nama'
	WHERE id_admin = $_GET[id_admin]";
// var_dump($query);exit;
mysql_query($query);
mysql_close();
echo"<script>alert('Data Berhasil Diubah');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-admin&message=success'>";
?>
