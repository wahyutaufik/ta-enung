<?php
mysql_query("DELETE FROM kategori where id_kategori = $_GET[id_kategori]");
echo"<script>alert('Data Berhasil Dihapus');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-kategori'>";
?>
