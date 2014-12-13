<?php  
$sql = "SELECT * FROM barang WHERE id_barang LIKE '$_GET[id]'";
$detail = mysql_query($sql);
while ($details = mysql_fetch_assoc($detail)) {
	$detailProduk[] = $details;
}
?>
<?php foreach ($detailProduk as $key => $dp): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="20%"><img style="margin-right:20px;" src="gambar/gambar_barang/<?php echo $dp['gambar'] ?>" width="200"></td>
    <td width="80%">
		<table width="100%">
			<tr>
				<td colspan="3">DETAIL BARANG</td>
			</tr>
			<tr>
				<td width="23%"><strong>Nama</strong></td>
				<td width="1%">:</td>
				<td width="76%"><?php echo $dp['nama_barang'] ?></td>
			</tr>
			<tr>
				<td><strong>Harga (Rp)</strong></td>
				<td>:</td>
				<td><?php echo $dp['harga'] ?></td>
			</tr>
			<tr>
				<td><strong>Stok</strong></td>
				<td>:</td>
				<td><?php echo $dp['stok'] ?></td>
			</tr>
			<tr>
				<td><strong>Kategori</strong></td>
				<td>:</td>
				<td>
					<?php  
	                $sql = "SELECT * FROM kategori WHERE id_kategori = $dp[id_kategori]";
	                $datas = mysql_query($sql);
	                while ($kat = mysql_fetch_assoc($datas)) {
	                    echo $kat['nama_kategori'];
	                }
	                ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<a href="index.php?modul=beli&id=<?php echo $dp['id_barang'] ?>"><strong>Beli</strong></a>
				</td>
			</tr>
		</table>	

    </td>
  </tr>
</table>
<?php endforeach ?>
