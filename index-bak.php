<?php  
include "config/koneksi.php";
$_SESSION = array();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ferani Baby Shop</title>
	<link rel="stylesheet" href="layout/css/bootstrap.min.css">
	<link rel="stylesheet" href="layout/css/layout.css">
</head>
<body>
<div id="wrapper">
	<div id="header">
		FERANI BABY SHOP
	</div>
	<div id="menu">
		<a href="index.php?modul=home">Home</a>
		<a href="index.php?modul=produk">Produk</a>
		<a href="index.php?modul=ttg_kami">Tentang kami</a>
		<a href="index.php?modul=cara_pemesanan">Cara Pemesanan</a>
		<a href="index.php?modul=keranjang_belanja">Keranjang Belanja</a>
		<?php if (!empty($_SESSION)): ?>
			<a href="index.php?modul=logout">Logout</a>
		<?php endif ?>
	</div>
	<div id="config">
		<div id="kiri">
			<?php if (empty($_SESSION['username'])): ?>
				<?php 
					$sql = "SELECT * FROM kategori";
					$i   = mysql_query($sql);
					while ($j = mysql_fetch_assoc($i)) {
						$k[] = $j;
					}
				?>	
				<a id="pertama" href="">Kategori</a>
				<?php if (is_null($k)): ?>
					<a href="">Kosong</a>
				<?php else: ?>	
					<?php foreach ($k as $key => $value): ?>
						<a href="index.php?module=produk&kategori=<?php echo $value['id_kategori'] ?>"><?php echo $value['nama_kategori'] ?></a>
					<?php endforeach ?>		
				<?php endif ?>
			<?php endif ?>
			<?php if (!empty($_SESSION)): ?>
				<?php if ($_SESSION['username'] == 'admin'): ?>
					<a id="pertama" href="">Home</a>
					<a id="pertama" href="">Admin</a>
					<a href="index.php?modul=tambah-admin">Tambah Admin</a>
					<a href="index.php?modul=list-admin">Data Admin</a>
					<a id="pertama" href="">Kategori</a>
					<a href="index.php?modul=tambah-kategori">Tambah Kategori</a>
					<a href="index.php?modul=list-kategori">Data Kategori</a>
					<a id="pertama" href="">Barang</a>
					<a href="index.php?modul=tambah-barang">Tambah Barang</a>
					<a href="index.php?modul=list-barang">Data Barang</a>
					<a id="pertama" href="">Pelanggan</a>
					<a href="">Data Pelanggan</a>
					<a id="pertama" href="">Profile</a>
					<a id="pertama" href="">Laporan</a>
					<a id="pertama" href="">Konfirmasi</a>
					<a id="pertama" href="">Keluar</a>
				<?php endif ?>
			<?php endif ?>
		</div>
		<div id="kanan">
			<?php  
				//include "halaman.php";
			?>
			<div id="clear"></div>
		</div>
		<div id="footer">&copy; Ferani BabyShop 2014 | <a href="index.php?modul=login_admin">Administrator</a></div>
	</div>
</div>
<script type="text/javascript" src="layout/js/jquery.min.js"></script>
<script type="text/javascript" src="layout/js/bootstrap.min.js"></script>
</body>
</html>