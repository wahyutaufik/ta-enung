<form action="index.php?modul=simpan-barang" method="post" enctype="multipart/form-data" name="form1">
  <table>
    <tr>
      <td>Kode Barang</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <input type="text" name="kd_barang" id="kd_barang">
      </td>
    </tr>
    <tr>
      <td>Nama Barang</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <input type="text" name="nm_barang" id="nm_barang">
      </td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
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
            <option value="<?php echo $v['id_kategori'] ?>"><?php echo $v['nama_kategori'] ?></option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <input type="text" name="harga" id="harga">
      </td>
    </tr>
    <tr>
      <td>Stok</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <input type="text" name="stok" id="stok">
      </td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <textarea name="keterangan" id="keterangan" cols="45" rows="5"></textarea>
      </td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
        <input type="file" name="gambar" id="gambar">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <input type="submit" name="simpan" id="simpan" value="SIMPAN">
        <input type="submit" name="batal" id="batal" value="BATAL">
        <a href="index.php?modul=list-barang">Kembali</a>
      </td>
    </tr>
  </table>
</form>
