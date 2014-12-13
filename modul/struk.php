<?php 
include "../config/koneksi.php"; 
$sid = session_id();
$pesan = "SELECT * FROM pesanan WHERE id_pemesan LIKE '$sid' GROUP BY id_pemesan";
$pesanan = mysql_query($pesan);
while ($pes = mysql_fetch_assoc($pesanan)) {
	$pesa[] = $pes;
}

?>
<style type="text/css">
	body{background-color: #FFF;}
	#header{display: none;}
	#side-left{display: none;}
	#side-right{display: none;}
	#footer{display: none;}
	#wrapper #content{width: 96%;}
	.nav-menu{display: none;}

</style>
<?php foreach ($pesa as $key => $pesana): ?>
<h1 style="font-size:20px; font-weight:bold;">BUKTI PEMESANAN #<?php echo $pesana['id'] ?></h1>
<table width="100%">
	<thead>
		<tr>
			<th colspan="2" style="font-weight:bold;"><h3>Detail Pemesanan</h3></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="50%">
				<h3>Ferani Baby Shop</h3> <br>
				Jl. Kedamaian <br>
				Telepon 9999999
			</td>
			<td width="50%">
				<h3>Tanggal Pemesanan : <?php echo $pesana['tanggal'] ?></h3>
				<h3>Nomor Invoice : <?php echo $pesana['invoice_no'] ?></h3>
				<h3>ID Pemesanan : <?php echo $pesana['id'] ?></h3>
				<!-- <h3>Pembayaran : <?php echo $pesana['id'] ?></h3> <br> -->
			</td>
		</tr>
		<tr>
			<td colspan="2" style="border:1; border-top: 1px solid #000;"><hr/></td>
		</tr>
		<tr>
			<td style="font-weight:bold;">Kepada</td>
		</tr>
		<tr>
			<td>
				<?php echo $pesana['name']; ?><br>
				-<br>
				<?php echo $pesana['address']; ?><br>
				<?php echo $pesana['phone'] ?>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="border:1; border-top: 1px solid #000;"><hr/></td>
		</tr>
	</tbody>
</table>
<table width="100%" border="1">
	<thead>
		<tr>
			<td>Produk</td>
			<td>Jumlah Beli</td>
			<td>Harga Satuan</td>
			<td>Total</td>
		</tr>
	</thead>
	<tbody>
		<?php 
			$pesan2 = "SELECT * FROM pesanan WHERE id_pemesan LIKE '$sid'";
			$pesanan2 = mysql_query($pesan2);
			while ($pes2 = mysql_fetch_assoc($pesanan2)) {
				$pesa2[] = $pes2;
			}
		?>
		<?php foreach ($pesa2 as $key => $pesana2): ?>
			<?php 
				$prod = "SELECT * FROM barang WHERE id_barang = '$pesana2[id_product]'";
				$xxx = mysql_query($prod);
				while ($prods = mysql_fetch_assoc($xxx)) {
					$produ[] = $prods;
				}
			?>
		<tr>
			<td><?php echo $produ[$key]['nama_barang'] ?></td>
			<td><?php echo $pesana2['jumlah'] ?></td>
			<td><?php echo 'Rp '.$produ[$key]['harga'] ?></td>
			<td><?php echo 'Rp '.$produ[$key]['harga']*$pesana2['jumlah'] ?></td>
		</tr>
		<?php $total += $produ[$key]['harga']*$pesana2['jumlah']; ?> 
		<?php endforeach ?>
		<tr>
			<td colspan="3" style="font-weight:bold; text-align:right;">Total&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td colspan="3" style="font-weight:bold; "><?php echo 'Rp '.$total ?></td>
		</tr>
	</tbody>
</table>
<?php endforeach ?>

<sup>* Harap Cetak Bukti Pemesanan</sup>