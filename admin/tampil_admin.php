<?php 
include "config/pagination.php";
$page        = 1;
$dataPerPage = 5;
$table       = admin;

if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];

if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];

$dataTable = getTableData($table, $page, $dataPerPage);
?>
<p class="side-title"><i class="fa fa-list"></i> List Admin</p>
<table class="table" border="1" width="100%">
	<thead>
		<tr>
			<th>ID Admin</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
<body>
<?php foreach ($dataTable as $key => $list_admin):?> 
	<?php $no = ($i + 1) + (($page - 1) * $dataPerPage); ?>
<tr>
	<td><?php echo $list_admin['id_admin'];?></td>
    <td><?php echo $list_admin['username'];?></td>
    <td><?php echo $list_admin['password'];?></td>
    <td><?php echo $list_admin['nama'];?></td>
	<td><a href="index.php?modul=edit-admin&id_admin=<?php echo $list_admin['id_admin'] ?>">Edit</a></td>
	<td><a href="index.php?modul=hapus-admin&id_admin=<?php echo $list_admin['id_admin'] ?>">Hapus</a></td>
</td>
<?php endforeach ?>
<tr>
<td colspan="9"><a href="index.php?modul=tambah-admin">Tambah Lagi</a></td>
</tr>
</body>
</table>
<?php showPagination($table, $dataPerPage);  ?>