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
<p class="side-title"><i class="fa fa-list"></i> List Barang</p>
<table class="table" border="1" width="100%">
	<thead>
		<tr>
			<th>Kode Barang</th>
			<th>Kode Kategori</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Keterangan</th>
			<th>Gambar</th>
			<th>Stok</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
<body>
<?php foreach ($dataTable as $key => $list_barang):?> 
	<?php $no = ($i + 1) + (($page - 1) * $dataPerPage); ?>
<tr>
	<td><?php echo $list_barang['id_barang'];?></td>
    <td><?php echo $list_barang['id_kategori'];?></td>
	<td><?php echo $list_barang['nama_barang'];?></td>	
	<td><?php echo $list_barang['harga'];?></td>
	<td><?php echo $list_barang['keterangan'];?></td>
	<td>
		<img src="gambar/gambar_barang/<?php echo $list_barang['gambar'];?>" style="width:80px; height:80px;">
	</td>
	<td><?php echo $list_barang['stok'];?></td>
	<td><a href="index.php?modul=edit-barang&id_barang=<?php echo $list_barang['id_barang'] ?>">Edit</a></td>
	<td><a href="index.php?modul=hapus-barang&id_barang=<?php echo $list_barang['id_barang'] ?>">Hapus</a></td>
</td>
<?php endforeach ?>
<tr>
<td colspan="9"><a href="index.php?modul=tambah-barang">Tambah Lagi</a></td>
</tr>
</body>
</table>
<?php showPagination($table, $dataPerPage);  ?>