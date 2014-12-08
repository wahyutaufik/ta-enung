<?php
// echo "<pre>";
$kode_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nm_barang'];
$kategori    = $_POST['kategori'];
$harga_jual  = $_POST['harga'];
$stok        = $_POST['stok'];
$keterangan  = $_POST['keterangan'];
$gambar      = $_FILES['gambar']['name'];
$tmp         = $_FILES['gambar']['tmp_name'];

$query = "INSERT INTO barang (id_barang, nama_barang, harga, stok, keterangan, gambar , id_kategori) 
	VALUES('$kode_barang','$nama_barang','$harga_jual','$stok','$keterangan','$gambar','$kategori')";
// print_r($query);
// exit;
mysql_query($query);
move_uploaded_file($tmp, "gambar/gambar_barang/".$gambar);
mysql_close();
echo '<script>document.location=
		"index.php?modul=list-barang&message=success";
	</script>';
?>
