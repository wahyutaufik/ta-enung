<form action="index.php?modul=simpan-admin" method="post">
  <table>
    <tr>
      <td>Username</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <input type="text" name="username" id="username">
      </td>
    </tr>
    <tr>
      <br>
      <td>Password</td>
      <td>&nbsp;:&nbsp;</td></br>
      <td>
        <input type="password" name="password" id="password">
      </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <input type="text" name="nama" id="nama">
      </td>
    </tr>

    <tr>
      <td colspan="3">
        <input type="submit" name="simpan" id="simpan" value="SIMPAN">
        <input type="reset" name="reset" id="reset" value="RESET">
        <a href="index.php?modul=list-admin">Kembali</a>
      </td>
    </tr>
  </table>
</form>
