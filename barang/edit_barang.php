<?php
$sql ="SELECT * FROM barang WHERE id_barang LIKE '%$_GET[id_barang]%'";
$datas = mysql_query($sql);
while ($data=mysql_fetch_assoc($datas)){
$barang[] = $data;
}
?>
<body>
<?php foreach ($barang as $key => $list_barang):?>
<form action="index.php?modul=update-barang&id_barang=<?php echo $list_barang['id_barang']?>"method="post" enctype="multipart/form-data" name="form1">
  <table>
    <tr>
      <td>Kode Barang</td>
      <td><label for="kd_barang"></label>
      <input type="text" name="id_barang" id="id_barang" value ="<?php echo $list_barang['id_barang']?>"></td>
    </tr>
    <tr>
      <td>Nama Barang</td>
      <td><label for="nm_barang"></label>
      <input type="text" name="nama_barang" id="nama_barang" value ="<?php echo $list_barang['nama_barang']?>"></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td><label for="nm_barang"></label>
        <select name="kategori" id="kategori">
          <option>- PILIH -</option>
          <?php  
            $sql = "SELECT * FROM kategori";
            $datas = mysql_query($sql);
            while ($kat = mysql_fetch_assoc($datas)) {
              $kategori[] = $kat;
            }
          ?>
          <?php foreach ($kategori as $k => $v): ?>
            <option value="<?php echo $v['id_kategori'] ?>" <?php if($list_barang['id_kategori'] == $v['id_kategori']){echo "selected";} ?>><?php echo $v['nama_kategori'] ?></option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label for="harga"></label>
      <input type="text" name="harga" id="harga" value="<?php echo $list_barang['harga'];?>"></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td><label for="stok"></label>
      <input type="text" name="stok" id="stok" value="<?php echo $list_barang['stok'];?>"></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><label for="keterangan"></label>
      <textarea name="keterangan" id="keterangan" cols="45" rows="5"><?php echo $list_barang['keterangan'];?></textarea></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><label for="gambar"></label>
      <img src="gambar/gambar_barang/<?php echo $list_barang['gambar'];?>" style="width:200px;">
      <input type="file" name="gambar" id="gambar"></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" name="simpan" id="simpan" value="SIMPAN">
        <a href="index.php?modul=list-barang">Kembali</a>
      </td>
    </tr>
  </table>
</form>
<?php endforeach?>