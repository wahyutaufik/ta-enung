<fieldset>
	<legend><h2>Administrator Login</h2></legend>
	<form action="index.php?modul=cek_login_admin" method="POST">
		<table>
			<tr>
				<td><label>Username</label></td>
				<td>:</td>
				<td><input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td>:</td>
				<td><input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" class="btn btn-primary btn-lg active" value="Login" id="register-submit">
					<a href="javascript:history.back()">Batal</a>
				</td>
			</tr>
		</table>
	</form>
</fieldset>