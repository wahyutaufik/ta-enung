<?php
// include"../koneksi/koneksi.php";
mysql_query("DELETE FROM barang where id_barang LIKE '%$_GET[id_barang]%'");
echo"<script>alert('Data Berhasil Dihapus');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-barang'>";
?>
