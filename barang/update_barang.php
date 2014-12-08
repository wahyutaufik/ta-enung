<?php
$kode_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori    = $_POST['kategori'];
$harga_jual  = $_POST['harga'];
$stok        = $_POST['stok'];
$keterangan  = $_POST['keterangan'];

if(empty($_FILES['gambar']['name'])){
	$model = mysql_query("SELECT * FROM barang WHERE id_barang LIKE'%$_GET[id_barang]%'");
	$data  =mysql_fetch_array($model);
	$gambar=$data['gambar'];
}else{
	$gambar      = $_FILES['gambar']['name'];
	$tmp         = $_FILES['gambar']['tmp_name'];
	move_uploaded_file($tmp, "gambar/gambar_barang/".$gambar);
}
$query = "UPDATE barang 
		  SET id_barang='$kode_barang',
		      nama_barang='$nama_barang',
		      id_kategori='$kategori',
		      harga='$harga_jual',
		      stok='$stok',
		      keterangan='$keterangan',
		      gambar='$gambar'
	WHERE id_barang LIKE '%$_GET[id_barang]%'";

mysql_query($query);
mysql_close();
echo"<script>alert('Data Berhasil Diubah');</script>";
echo"<meta http-equiv='refresh' content='0; url=index.php?modul=list-barang&message=success'>";
?>
