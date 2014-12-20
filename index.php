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
	<link type="image/x-icon" href="layout/img/favicon.ico" rel="Shortcut icon">
	<link rel="stylesheet" href="layout/css/layout.css">
	<link rel="stylesheet" href="layout/css/font-awesome/font-awesome.min.css">
</head>
<body>
	<div id="wrapper">
		<?php if (empty($_SESSION['username'])): ?>
			<nav class="nav-menu">
				<ul>
					<li><a href="index.php?modul=home"><i class="fa fa-home"></i> home</a></li>
					<li><a href="index.php?modul=produk"><i class="fa fa-lemon-o"></i> produk</a></li>
					<li><a href="index.php?modul=ttg_kami"><i class="fa fa-sitemap"></i> tentang kami</a></li>
					<li><a href="index.php?modul=pemesanan"><i class="fa fa-ticket"></i> cara pemesanan</a></li>
					<li><a href="index.php?modul=konfirmasi"><i class="fa fa-check"></i> konfirmasi</a></li>
				</ul>
			</nav>
		<?php endif ?>
		<div id="header">
			<!-- <img src="layout/img/header.jpg"> -->
			<div class="description">
                <h1 class=""><a href="">FERANI BABY SHOP</a></h1>
            </div>
		</div>
		<div id="side-left">
			<?php  
				if (empty($_SESSION['username'])) {
					include "side-left.php";
				} else {
					include "left-side-admin.php";
				}
			?>
		</div>
		<div id="content" <?php if(!empty($_SESSION['username'])) echo "style='width: 74.9%;'"; ?>>
			<?php  
				include "halaman.php";
			?>
		</div>
		<?php if (empty($_SESSION['username'])): ?>
		<div id="side-right">
			<div class="cart-count">
				<p class="side-title">Payment</p>
				<a href="http://klikbca.com" target="_blank"><img src="layout/img/bca.jpg" width="200"></a>
				<a href="http://mandiri.com" target="_blank"><img src="layout/img/mandiri.jpg" width="200"></a>
			</div>
		</div>
			
		<?php endif ?>
		<div class="clear"></div>
		<div id="footer">
			<p>&copy; 2014-2015 Nuraeni Solehatin | <a href="index.php?modul=login_admin">Administrator</a></p>
		</div>
	</div>
</body>

</html>