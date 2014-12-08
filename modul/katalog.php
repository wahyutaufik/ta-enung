<p class="side-title"><i class="fa fa-home"></i> Produk</p>
<?php 
include "config/pagination.php";
$page        = 1;
$dataPerPage = 5;
$table       = barang;

if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];

if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];

$dataTable = getTableData($table, $page, $dataPerPage);
?>
<table  width="100%">
    <tbody>
        <?php foreach ($dataTable as $i => $data): ?>
        <?php $no = ($i + 1) + (($page - 1) * $dataPerPage); ?>
        <tr>
            <td width="27%">
                <a href="index.php?modul=produkDetail&id=<?php echo $data['id_barang'] ?>"><img src="gambar/gambar_barang/<?php echo $data['gambar'] ?>" width="100" alt=""></a>
                <br>
                <div class="harga">Rp. <?php echo $data['harga'] ?></div>
                <a href="index.php?modul=&id=<?php echo $data['id_barang'] ?>"><strong>Beli</strong></a>
            </td>
            <td width="73%">
            	<a href="index.php?modul=produkDetail&id=<?php echo $data['id_barang'] ?>">
            		<?php echo $data['nama_barang'] ?>
            	</a>
            	<p><?php echo substr($data['keterangan'], 0, 200) ?>...</p>
            	<p><strong>Stok:</strong> <?php echo $data['stok'] ?></p>
            	<strong>Kategori:</strong>
            	<a href="index.php?modul=produk&kategori=<?php echo $data['id_kategori'] ?>">xxx</a>
            	<br>
            	<br>
            	<br>
        	</td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php showPagination($table, $dataPerPage);  ?>