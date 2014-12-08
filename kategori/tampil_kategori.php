<?php
include"../config/koneksi.php";
$sql ="SELECT * FROM Kategori";
$datas = mysql_query($sql);
while ($data=mysql_fetch_assoc($datas)){
$Kategori[] = $data;
}
?>
<?php 
include "config/pagination.php";
$page        = 1;
$dataPerPage = 5;
$table       = kategori;

if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];

if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];

$dataTable = getTableData($table, $page, $dataPerPage);
?>
<p class="side-title"><i class="fa fa-list"></i> List Kategori</p>
<table class="table" border="1" width="100%">
	<thead>
		<tr>
			<th>ID Kategori</th>
			<th>Nama Kategori</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
<body>
<?php foreach ($dataTable as $key => $list_kategori):?> 
<tr>
	<td><?php echo $list_kategori['id_kategori'];?></td>
    <td><?php echo $list_kategori['nama_kategori'];?></td>
	<td><a href="index.php?modul=edit-kategori&id_kategori=<?php echo $list_kategori['id_kategori'] ?>">Edit</a></td>
	<td><a href="index.php?modul=hapus-kategori&id_kategori=<?php echo $list_kategori['id_kategori'] ?>">Hapus</a></td>
</td>
<?php endforeach ?>
<tr>
<td colspan="9"><a href="index.php?modul=tambah-kategori">Tambah Lagi</a></td>
</tr>
</body>
</table>
<?php showPagination($table, $dataPerPage);  ?>