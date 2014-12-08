<?php
mysql_query("DELETE FROM admin where id_admin = $_GET[id_admin]");
echo"<script>alert('Data Berhasil Dihapus');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-admin'>";
?>
