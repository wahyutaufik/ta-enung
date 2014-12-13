<?php  
function getTableData($tableName, $page = 1, $limit = 20)
{
	$dataTable = array();
	$startRow  = ($page - 1) * $limit;
    $query     = mysql_query('SELECT * FROM `'.$tableName.'` LIMIT '.$startRow.', '.$limit);
    if ($_GET['modul'] == 'list-pesanan') {
	   $query     = mysql_query('SELECT * FROM `'.$tableName.'` GROUP BY invoice_no LIMIT '.$startRow.', '.$limit);
    }
 
    while ($data = mysql_fetch_assoc($query)) 
        array_push($dataTable, $data);
 
    return $dataTable;
}

function showPagination($tableName, $limit = 20)
{
	$countTotalRow = mysql_query('SELECT COUNT(*) AS total FROM `'.$tableName.'`');
	$queryResult   = mysql_fetch_assoc($countTotalRow);
	$totalRow      = $queryResult['total'];
	
	$totalPage     = ceil($totalRow / $limit);
 
    $page = 1;
    while ($page <= $totalPage) 
    {
        echo '<a href="?modul='.$_GET[modul].'&page='.$page.'&perPage='.$limit.'">'.$page.'</a>';
        if ($page < $totalPage)
            echo " | ";
 
        $page++;
    }
}
?>