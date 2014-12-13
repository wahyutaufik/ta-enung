<?php
$sql ="SELECT * FROM konfirmasi WHERE id_konfirmasi = $_GET[id_konfirmasi] ";
$datas = mysql_query($sql);
while ($data=mysql_fetch_assoc($datas)){
$konfirmasi[] = $data;
}
?>
<body>
<?php foreach ($konfirmasi as $key => $list_konfirmasi):?>
<table width="100%">
	<tr>
	  <td width="15%">Invoice</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['id_pesan']?></td>
	</tr>
	<tr>
	  <td width="15%">Nama</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['nama']?></td>
	</tr>
	<tr>
	  <td width="15%">Bank Pemilik</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['bank_pemilik']?></td>
	</tr>
	<tr>
	  <td width="15%">Pemilik</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['pemilik']?></td>
	</tr>
	<tr>
	  <td width="15%">No Rekening</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['norekening']?></td>
	</tr>
	<tr>
	  <td width="15%">Bank Tujuan</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['bank_tujuan']?></td>
	</tr>
	<tr>
	  <td width="15%">Jumlah Transfer</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['jumlah_transfer']?></td>
	</tr>
	<tr>
	  <td width="15%">Tanggal</td>
	  <td width="2%">:</td>
	  <td><?php echo $list_konfirmasi['tanggal']?></td>
	</tr>
	<tr>
	  <td colspan="3">
	    <a href="index.php?modul=list-konfirmasi">Kembali</a>
	  </td>
	</tr>
</table>
<?php endforeach?>