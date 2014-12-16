<?php
include "config/pagination.php";
$page        = 1;
$dataPerPage = 5;
$table       = konfirmasi;

if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];

if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];

$dataTable = getTableData($table, $page, $dataPerPage);
?>
<p class="side-title"><i class="fa fa-list"></i> List Konfirmasi</p>
<table border="1" width="100%">
	<thead>
		<tr>
			<th>ID Pesanan</th>
			<th>Nama</th>
			<th>Bank</th>
			<th>Pemilik</th>
			<th>Rekening</th>
			<th>Tujuan</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($dataTable as $key => $list_konfirmasi):?> 
	<tr>
		<td><?php echo $list_konfirmasi['id_pesan']?></td>
	    <td><?php echo $list_konfirmasi['nama']?></td>
	    <td><?php echo $list_konfirmasi['bank_pemilik']?></td>
	    <td><?php echo $list_konfirmasi['pemilik']?></td>
	    <td><?php echo $list_konfirmasi['norekening']?></td>
	    <td><?php echo $list_konfirmasi['bank_tujuan']?></td>
	    <td><?php echo $list_konfirmasi['tanggal']?></td>
		<td><a href="index.php?modul=lihat-konfirmasi&id_konfirmasi=<?php echo $list_konfirmasi['id_konfirmasi']?>">Lihat</a></td>
	</td>
	<?php endforeach ?>
	</tbody>
</table>
<?php showPagination($table, $dataPerPage);  ?>