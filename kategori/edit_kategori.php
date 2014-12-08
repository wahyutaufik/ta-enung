<?php
$sql ="SELECT * FROM kategori WHERE id_kategori = $_GET[id_kategori] ";
$datas = mysql_query($sql);
while ($data=mysql_fetch_assoc($datas)){
$kategori[] = $data;
}
?>
<body>
<?php foreach ($kategori as $key => $list_kategori):?>
<form action="index.php?modul=update-kategori&id_kategori=<?php echo $list_kategori['id_kategori']?>"method="post" enctype="multipart/form-data" name="form1">
  <table>
    <tr>
      <td>Nama Kategori</td>
      <td><label for="nm_kategori"></label>
      <input type="text" name="nama_kategori" id="nama_kategori" value ="<?php echo $list_kategori['nama_kategori']?>"></td>
    </tr>
    <tr>
      <td colspan="3">
        <input type="submit" name="simpan" id="simpan" value="SIMPAN">
        <a href="index.php?modul=list-kategori">Kembali</a>
      </td>
    </tr>
  </table>
</form>
<?php endforeach?>