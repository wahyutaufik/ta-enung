<p class="side-title"><i class="fa fa-check"></i> Konfirmasi</p>
<br>
<br>	
<form method="POST" action="index.php?modul=simpan_konfirmasi">
	<table width="100%">
		<tr>
			<td width="30%">Nomor Invoice</td>
			<td><input type="text" name="id_pesan"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Bank</td>
			<td><input type="text" name="bank_pemilik"></td>
		</tr>
		<tr>
			<td>Pemilik</td>
			<td><input type="text" name="pemilik"></td>
		</tr>
		<tr>
			<td>No Rekening</td>
			<td><input type="text" name="norekening"></td>
		</tr>
		<tr>
			<td>Bank Tujuan</td>
			<td><input type="text" name="bank_tujuan"></td>
		</tr>
		<tr>
			<td>Jumlah Transfer</td>
			<td><input type="text" name="jumlah_transfer"></td>
		</tr>
		<tr>
			<td>Tanggal Transfer</td>
			<td><input type="text" placeholder="dd-mm-yyyy" name="tanggal"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Telpon</td>
			<td><input type="text" name="telepon"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit"></td>
			<td></td>
		</tr>
	</table>
</form>