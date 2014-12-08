<?php
$sql ="SELECT * FROM admin WHERE id_admin = $_GET[id_admin] ";
$datas = mysql_query($sql);
while ($data=mysql_fetch_assoc($datas)){
$admin[] = $data;
}
?>
<body>
<?php foreach ($admin as $key => $list_admin):?>
<form action="index.php?modul=update-admin&id_admin=<?php echo $list_admin['id_admin']?>"method="post" enctype="multipart/form-data" name="form1">
  <table>
    <tr>
      <td>Username</td>
      <td><label for="username"></label>
      <input type="text" name="username" id="username" value ="<?php echo $list_admin['username']?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="username"></label>
      <input type="password" name="password" id="password" value ="<?php echo $list_admin['password']?>"></td>
    </tr>
    <tr>
      <td>Nama Lengkap</td>
      <td><label for="username"></label>
      <input type="text" name="nama" id="nama" value ="<?php echo $list_admin['nama']?>"></td>
    </tr>
    <tr>
      <td colspan="3">
        <input type="submit" name="simpan" id="simpan" value="SIMPAN">
        <a href="index.php?modul=list-admin">Kembali</a>
      </td>
    </tr>
  </table>
</form>
<?php endforeach?>