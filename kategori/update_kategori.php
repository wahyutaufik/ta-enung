<?php
$id_kategori = $_GET['id_kategori'];
$nm_kategori = $_POST['nama_kategori'];

$query = "UPDATE kategori 
		  SET id_kategori = $id_kategori,
		      nama_kategori = '$nm_kategori'
	WHERE id_kategori = $_GET[id_kategori]";
	
mysql_query($query);
mysql_close();
echo"<script>alert('Data Berhasil Diubah');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-kategori&message=success'>";
?>
