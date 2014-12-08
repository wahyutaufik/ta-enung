<?php
// echo "<pre>";
$nama_kategori = $_POST['nama_kategori'];
$query = "INSERT INTO kategori (id_kategori, nama_kategori)
	VALUES(NULL,'$nama_kategori')";
// print_r($query);
// exit;
mysql_query($query);
mysql_close();
echo"<script>alert('Data Berhasil Ditambah');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-kategori&message=success'>";
