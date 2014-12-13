<?php
include "config/pagination.php";
$page        = 1;
$dataPerPage = 5;
$table       = pesanan;

if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];

if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];

$dataTable = getTableData($table, $page, $dataPerPage);
?>
<p class="side-title"><i class="fa fa-list"></i> List Pesanan</p>
<table border="1" width="100%">
	<thead>
		<tr>
			<th>Nama Pemesan</th>
			<th>Email</th>
			<th>Invoice</th>
			<th>Status</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($dataTable as $key => $list_pesanan):?> 
	<tr>
		<td><?php echo $list_pesanan['name']?></td>
	    <td><?php echo $list_pesanan['email']?></td>
	    <td><?php echo $list_pesanan['invoice_no']?></td>
	    <td><?php echo $list_pesanan['status']?></td>
		<td><a href="index.php?modul=lihat-pesanan&id_pesanan=<?php echo $list_pesanan['id']?>">Lihat</a></td>
	</td>
	<?php endforeach ?>
	</tbody>
</table>
<body>