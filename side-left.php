<div class="cart-count">
	<p class="side-title">Keranjang Belanja</p>
	<p class="cart"><i class="fa fa-shopping-cart"></i> 2 item</p>
	<div align="center">
		<a href="" class="btn"><i class="fa fa-shopping-cart"></i> Keranjang</a>	
	</div>
</div>
<div class="side-category">
	<p class="side-title">Kategori</p>
	<?php if (empty($_SESSION['username'])): ?>
		<?php 
			$sql = "SELECT * FROM kategori";
			$i   = mysql_query($sql);
			while ($j = mysql_fetch_assoc($i)) {
				$k[] = $j;
			}
		?>
		<?php if (is_null($k)): ?>
			<a href="">Kosong</a>
		<?php else: ?>	
			<?php foreach ($k as $key => $value): ?>
				<a href="index.php?modul=produk&kategori=<?php echo $value['id_kategori'] ?>"><?php echo $value['nama_kategori'] ?></a>
			<?php endforeach ?>		
		<?php endif ?>
	<?php endif ?>
</div>