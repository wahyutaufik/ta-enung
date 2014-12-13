<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h2 class="style">Form Pemesanan</h2>
		</div>
	</div>
</div>
<form action="input.php?input=inputform" method="post">
	<table width="100%">
		<tr>
			<td><label>Nama</label></td>
			<td><input class="form-control" type="text" name="name"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input class="form-control" type="text" name="email"></td>
		</tr>
		<tr>
			<td><label>Alamat</label></td>
			<td><textarea class="form-control" name="address" cols="40" rows="7"></textarea></td>
		</tr>
		<tr>
			<td><label>No HP</label></td>
			<td><input class="form-control" type="text" name="telp"></td>
		</tr>
		<tr>
			<td><input type="submit" class="btn btn-success" value="Order"></td>
			<td></td>
		</tr>
	</table>
</form>