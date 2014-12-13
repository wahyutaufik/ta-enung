<?php
$sql ="SELECT * FROM pesanan WHERE id = $_GET[id_pesanan] ";
$datas = mysql_query($sql);
while ($data=mysql_fetch_assoc($datas)){
$pesanan[] = $data;
}
?>
<body>
<?php foreach ($pesanan as $key => $list_pesanan):?>
<table width="100%">
	<tr>
	  <td width="15%">Invoice</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_pesanan['invoice_no']?></td>
	</tr>
	<tr>
	  <td width="15%">Nama</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_pesanan['name']?></td>
	</tr>
	<tr>
	  <td width="15%">Email</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_pesanan['email']?></td>
	</tr>
	<tr>
	  <td width="15%">Telepon</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_pesanan['phone']?></td>
	</tr>
	<tr>
	  <td width="15%">Alamat</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_pesanan['address']?></td>
	</tr>
	<tr>
	  <td width="15%">Tanggal Pemesanan</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_pesanan['tanggal']?></td>
	</tr>
	<tr>
	  <td width="15%">Status</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_pesanan['status']?></td>
	</tr>
	<tr>
		<table width="100%" border="1">
			<tr>
				<th>ID Produk</th>
				<th>Jumlah</th>
				<th>Harga (Rp)</th>
			</tr>
			<?php  
			$produk = mysql_query("SELECT * FROM pesanan WHERE invoice_no = $list_pesanan[invoice_no]");
			while ($product = mysql_fetch_assoc($produk)) {
				$prod = "SELECT * FROM barang WHERE id_barang = '$product[id_product]'";
				$xxx = mysql_query($prod);
				while ($prods = mysql_fetch_assoc($xxx)) {
					$harga = ($prods['harga']*$product['jumlah']); 
					$sum +=$harga;
			?>
			<tr>
				<td><?php echo $product['id_product']; ?></td>
				<td><?php echo $product['jumlah']; ?></td>
				<td align="right"><?php echo $harga ?></td>
			</tr>
			<?php } 
					
			}?>
			<tr>
				<td colspan="2"><b>Total</b></td>
				<td align="right"><b>Rp <?php echo $sum ?></b></td>
			</tr>
		</table>
	</tr>
	<tr>
	  <td colspan="3">
	    <a href="index.php?modul=list-pesanan">Kembali</a>
	  </td>
	</tr>
</table>
<?php endforeach?>